<?php 
require_once("../inc/connection.php");
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $user_password = $_POST['password'];

    $check_q = "select * from customers where email = ?";
    $stmt = $connection->prepare($check_q);
    $stmt->execute([ $email]);
    $user = $stmt->fetch();
    if($user){
          $hashed_password = $user['password'];
    // verification   12345           ewerghrrder
        if(password_verify($user_password , $hashed_password)){
            session_start();
            $_SESSION['user_name'] = "{$user['fname']} {$user['lname']}";
            $_SESSION['user_email'] = "{$user['email']}";
            $_SESSION['user_role'] = "{$user['role']}";
            $_SESSION['user_id'] = "{$user['id']}";
           header("location: ../index.php");
        }else{
           echo "re enter your password";
        }
    }
        else{
        echo "email doesn't exist go to register";
    }
 
}else{
    header("location: ../login.php");
}


?>