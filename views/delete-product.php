<?php
    include "../classes/Product.php";
    session_start();

    $product = new Product;
    $prod_rows = $product->getProduct($_GET['id']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete Product</title>
  <!-- offline -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- online CDN via jsDelivrの<link>部分をコピペ -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <?php
    include "../views/nav-menu.php";
  ?>

  <main class="container" style="padding-top: 80px">
    <div class="card w-25 mx-auto border-0">
      <div class="card-header bg-white border-0">
        <h2 class="text-center text-danger">DELETE PRODUCT</h2>
      </div>

      <div class="card-body">
        <div class="text-center mb-4">
          <i class="fas fa-exclamation-triangle text-warning display-4 d-block mb-2"></i>
          <p class="fw-bold mb-0">Are you sure you want to delete "<?= $prod_rows['product_name'] ?>"?</p>
        </div>
        <div class="row">
          <div class="col">
            <a href="dashboard.php" class="btn btn-secondary w-100">Cancel</a>
          </div>
          <div class="col">
            <a href="../actions/deleteProduct.php?id=<?= $prod_rows['id']?>" class="btn btn-danger w-100">Delete</a>
          </div>
        </div>
      </div>
    </div>
  </main>
  
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>