<?php
  include "../classes/User.php";
  
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $user = new User;
  $user->createUser($first_name, $last_name, $username, $password);