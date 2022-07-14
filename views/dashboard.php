<?php
  session_start();
  include "../classes/Product.php";
  $product = new Product;
  $prod_row = $product->displayAllProducts();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
  <?php
    include "../views/nav-menu.php";
  ?>
    <main class="container py-5">
        <div class="row">
          <div class="col">
            <div class="row mb-1">
              <div class="col-sm-11">
                <p class="text-dark pt-2" style="font-size: 55px;"> Product List</p>
              </div>
              <div class="col-sm-1 mt-3">
                  <a href="../views/add-product.php" class="text-info" style="font-size: 55px;"><i class="fa-solid fa-plus"></i></a>
              </div>
            </div>
          </div>
        </div>
            <table class="table table-hover mt-4">
                <thead class="table-dark text-center">
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>  
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Image</th>
                        <th></th>
                        <th></th>
                        <!-- <th style="width: 95px"></th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                      while($prod_rows = $prod_row->fetch_assoc()){
                    ?>
                    <tr class="text-center">
                      <td><?=$prod_rows['id'] ?></td>
                      <td><?=$prod_rows['product_name'] ?></td>
                      <td><?=$prod_rows['price'] ?></td>
                      <td><?=$prod_rows['quantity'] ?></td>
                      <td><img src="../assets/images/<?=$prod_rows['image'] ?>" alt="<?=$prod_rows['image'] ?>" style="width:50px;"></td>
                      <td><a href="edit-product.php?id=<?=$prod_rows['id']?>" class="btn btn-warning"><i class="fa-solid fa-pen"></i></a>
                           <a href="delete-product.php?id=<?=$prod_rows['id']?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a></td>
                      <?php
                        if($prod_rows['quantity'] > 0){
                      ?>   
                        <td><a href="buy-product.php?id=<?=$prod_rows['id']?>" class="btn btn-success"><i class="fa-solid fa-cash-register"></i></a></td> 
                      <?php    
                        } elseif($prod_rows['quantity']== 0){
                      ?>
                        <td></td>
                      <?php    
                        }
                      ?>
                   
                    </tr>
                    <?php    
                      }
                    ?> 
                </tbody>  
            </table>

    </main> 


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>