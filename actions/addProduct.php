<?php
  include "../classes/Product.php";

  $product_name = $_POST['product_name'];
  $price = $_POST['price'];
  $quantity = $_POST['quantity'];
  $image_name = $_POST['photo']['name'];
  $tmp_name = $_POST['photo']['tmp_name'];

  $product = new Product;

  $product->addProduct($product_name, $price, $quantity, $image_name, $tmp_name);