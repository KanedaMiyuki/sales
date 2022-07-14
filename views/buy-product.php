<?php
  session_start();
  include "../classes/Product.php";
  $product = new Product;
  $prod_rows = $product->getProduct($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buy Product</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
  <?php
    include "../views/nav-menu.php";
  ?>
    <main class="container py-5">
      <div class="card mx-auto border-0 w-50">
        <div class="card-header bg-white border-0">
          <p class="text-success text-center fw-bold" style="font-size:60px;"><i class="fa-solid fa-cash-register"></i> Buy Product</p>
        </div>
      
        <div class="card-body">
          
          <div class="row w-50 mx-auto">
            <div class="col">
              <img src="../assets/images/<?=$prod_rows['image']?>" alt="" class="card-image-top mb-3" style="width:300px;">
            <form action="payment.php?id=<?=$prod_rows['id']?>" method="post">
                <input type="hidden" name="id" value="<?=$prod_rows['id']?>">
                
                <p>Product Name</p>
                <h3><?=$prod_rows['product_name']?></h3>

                <div class="row mb-3">
                     <div class="col-md-6">
                       <p>Price</p>
                       <h3>$ <?=$prod_rows['price']?></h3>
                      </div>

                      <div class="col-md-6">
                        <p>Stocks Left</p>
                        <h3><?=$prod_rows['quantity']?></h3>
                      </div>
                </div>

                  <label for="buy_quantity" class="form-label w-50">Buy Quantity</label>
                  <input type="number" name="buy_quantity" id="buy_quantity" class="form-control w-75 mb-3 mx-auto" max="<?=$prod_rows['quantity']?>" required>

                <div class="text-center">
                    <input type="submit" class="btn btn-success w-100 mt-3" value="Pay">
                    <a href="dashboard.php" class="btn btn-secondary btn-md mt-3">Cancel</a>
                </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </main> 


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>