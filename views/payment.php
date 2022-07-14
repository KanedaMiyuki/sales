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
  <title>Payment</title>
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
          <p class="text-success text-center fw-bold" style="font-size:60px;"><i class="fa-solid fa-hand-holding-dollar"></i> Payment</p>
        </div>
        <div class="card-body">
          <div class="row w-50 mx-auto">
            <div class="col">
            <form action="../actions/payment.php?id=<?=$prod_rows['id']?>" method="post">
                
                <p>Product Name</p>
                <h3><?=$prod_rows['product_name']?></h3>

                <div class="row mb-3">
                     <div class="col-md-6">
                     <!-- <input type="hidden" name="total_price"> -->
                       <p>Total Price</p>
                       <h3>$ <?=
                            number_format($prod_rows['price'] * $_POST['buy_quantity'], 2)
                          ?>
                        </h3>
                      </div>

                      <div class="col-md-6">
                        <p>Buy Quantity<span style="color: red;"> *</span></p>
                        <input type="hidden" name="buy_quantity" value="<?=$_POST['buy_quantity']?>">
                        <h3><?=$_POST['buy_quantity']?></h3>
                        <br>

                        <h6 style="color:red;">
                          Maximum of <?=$prod_rows['quantity']?>
                        </h6>
                      </div>
                </div>

                  <label for="payment" class="form-label w-50">Payment</label>
                  <input type="float" name="payment" id="payment" class="form-control w-75 mb-3 mx-auto" value="payment"min="<?=
                            number_format($prod_rows['price'] * $_POST['buy_quantity'], 2)
                          ?>" required>

                <div class="text-center">
                <button type="submit" class="btn btn-success w-100 mt-3">Pay</button>
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