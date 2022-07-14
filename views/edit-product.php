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
  <title>Edit Product</title>
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
          <p class="text-warning text-center fw-bold" style="font-size:60px;"><i class="fa-solid fa-pen-to-square"></i> Edit Product</p>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col">
            <form action="../actions/updateProduct.php?id=<?=$prod_rows['id']?>" method="post" enctype="multipart/form-data">
                
                <label for="product_name" class="form-label">Product Name</label>
                <input type="text" name="product_name" id="product_name" class="form-control" value="<?=$prod_rows['product_name']?>" required>

                <div class="row mb-3">
                     <div class="col-md-6">
                       <label for="price" class="form-label">Price</label>
                       <div class="input-group mb-2">
                           <div class="input-group-text">$</div>
                           <input type="float" name="price" id="price" class="form-control" value="<?=$prod_rows['price']?>" required>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="text" class="form-control" name="quantity" id="quantity" value="<?=$prod_rows['quantity']?>" required>
                      </div>
                     
                      <img src="../assets/images/<?=$prod_rows['image'] ?>" alt="<?=$prod_rows['image'] ?>" style="width:200px;" class="img-fluid mx-auto">
                      <input type="file" name="image" id="image" class="form-control mt-3" aria-label="Choose Photo" accept="img/*">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-warning w-100">Edit</button> 
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