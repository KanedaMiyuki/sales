<?php
  include "../classes/Product.php";

  $id = $_GET['id']; //formタグ内でIDがわかるようにしている場合は$_GETを使用
  $product_name = $_POST['product_name'];
  $price = $_POST['price'];
  $quantity = $_POST['quantity'];
  $image_name = $_FILES['image']['name'];
  $tmp_name = $_FILES['image']['tmp_name'];

  
  $product = new Product;
  
  $product->updateProduct($id, $product_name, $price, $quantity, $image_name, $tmp_name);
