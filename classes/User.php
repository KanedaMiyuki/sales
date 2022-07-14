<?php
  require "Database.php";

  class User extends Database{

    //Create a user
    public function createUser($first_name, $last_name, $username, $password){

      $password = password_hash($password, PASSWORD_DEFAULT);

      $sql = "INSERT INTO `users` (`first_name`, `last_name`, `username`, `password`) VALUES ('$first_name', '$last_name', '$username', '$password')";

      if ($this->conn->query($sql)){
            header("location: ../views"); 
            exit;                     
      } else{
            die("Error creating user: ". $this->conn->error);
      }
    }

    //LOG IN
    public function login($login_username, $password){
      $sql = "SELECT * FROM `users` WHERE `username` = '$login_username'";

      if($result = $this->conn->query($sql)){
        if($result->num_rows == 1){
          $user_details = $result->fetch_assoc();
          if(password_verify($password, $user_details['password'])){
            session_start();
            $_SESSION['id'] = $user_details['id'];
            $_SESSION['username'] = $user_details['username'];

            header("location: ../views/dashboard.php");
            exit;
          } else{
             die("Password is incorrect.");
          }
        } else{
          die("Username not found.");
        }
      } else{
        die("Error logging in: ". $this->conn->error);
      }
    }

  }
