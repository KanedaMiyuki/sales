<?php
  include "../classes/Product.php";

  $id = $_GET['id'];
  $buy_quantity = $_POST['buy_quantity'];

  $product = new Product;
  $product->updateQuantity($id, $buy_quantity);


