<?php
  include "../classes/User.php";

  $login_username = $_POST['login_username'];
  $login_password = $_POST['login_password'];

  $user = new User;

  $user->login($login_username, $login_password);