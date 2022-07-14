<?php
  require "Database.php";

  class Product extends Database{
        //Display All Products
        public function displayAllProducts(){
          $sql = "SELECT * FROM `products`";
    
          if($result = $this->conn->query($sql)){
            return $result;
          } else{
            die("Error retrieving all products: ". $this->conn->error);
          }
          
        }
    
        //Add Product
        public function addProduct($product_name, $price, $quantity, $image_name, $tmp_name){
          $sql = "INSERT INTO `products` (`product_name`, `price`, `quantity`, `photo`) VALUES ('$product_name', '$price', '$quantity', $image_name)";
          
          if ($this->conn->query($sql)){
            $destination = "../assets/images/$image_name";
            if(move_uploaded_file($tmp_name, $destination)){
              header("location: ../views/dashboard.php"); 
              exit;
            } else{
              die("Error moving the photo");
            }
          } else{
            die("Error Adding Product: ". $this->conn->error);
          }
        }
    
        //Get One Product
        public function getProduct($id){
          $sql = "SELECT * FROM `products` WHERE `id` = $id";
    
          if($result = $this->conn->query($sql)){
            return $result->fetch_assoc();
          } else{
            die("Error retrieving product's data: ". $this->conn->error);
          }
        }
        
        //Update the Product
        public function updateProduct($id, $product_name, $price, $quantity, $image_name, $tmp_name){

          //画像更新がある
          if(!empty($image_name)){
            $sql= "UPDATE `products` SET `product_name` = '$product_name', `price` = '$price', `quantity` = '$quantity', `image` = '$image_name' WHERE `id` = $id";

            if($this->conn->query($sql)){
              $destination = "../assets/images/$image_name";
              if(move_uploaded_file($tmp_name, $destination)){
                header("location: ../views/dashboard.php");
                exit;
              } else{
                die("Error in Moving the Photo: ".$this->conn->error);
              } 
            } else{
              die("Error in Uploading the Photo: ".$this->conn->error);
            }
            //画像更新なし elseでもOK
          } else{
            $sql= "UPDATE `products` SET `product_name` = '$product_name', `price` = '$price', `quantity` = '$quantity' WHERE `id` = $id";
            if($this->conn->query($sql)){
              header("location: ../views/dashboard.php");
              exit;
            } else{
              die("Error updating Product: ". $this->conn->error);
            }
          }
       }
    
        //Delete the Product
        public function deleteProduct($id){
          $sql = "DELETE FROM `products` WHERE `id` = $id";
    
          if($this->conn->query($sql)){
            header("location: ../views/dashboard.php");
            exit;
          } else{
            die("Error deleting the product: ". $this->conn->error);
          }
        }

        //Update Quantity
        public function updateQuantity($id, $buy_quantity){
          $sql= "UPDATE `products` SET `quantity` = `quantity` - '$buy_quantity' WHERE `id` = $id";
    
          if($this->conn->query($sql)){
            header("location: ../views/dashboard.php");
            exit;
          } else{
            dir("Error updating the product: ". $this->conn->error);
          }
        }



        

        
        //Calculation
        // public function calculation($id){
        //   $sql = "SELECT `price` FROM `products` WHERE `id` = $id";
        //   if($result = $this->conn->query($sql)){
        //     return $result->fetch_assoc();
        //   }
        // }

        //Display Buy Quantity
        // private $buy_quantity;
        // public function get($buy_quantity){
        //   $this->buy_quantity = $buy_quantity;
        // }

        // public function displayQuantity(){
        //   return $this->buy_quantity;
        // }
  }
