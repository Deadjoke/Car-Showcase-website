<?php 

require_once("../inc/connection.php");
if(isset($_POST['rgister'])){
    $first_name = $_POST['fname']; 
    $last_name = $_POST['lname']; 
    $user_email = $_POST['email']; 
    $user_password = $_POST['pass']; //1234
    $password =password_hash( $user_password , PASSWORD_DEFAULT);
    $register_q = "insert into customers (fname , lname , email , password ) values (?,?,?,?)";
    $stmt = $connection->prepare($register_q);//prevent sql injection (attacking)
    $stmt->execute(
        [
            $first_name , 
            $last_name , 
            $user_email,
            $password
        ]
    );
    header("location: ../login.php");

}else{
    header("location: ../register.php");
}

?>