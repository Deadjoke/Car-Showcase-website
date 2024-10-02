<?php 
require_once("../inc/connection.php");
if(isset($_POST['edit-btn'])){
    $pro_name = $_POST['name'];
    $pro_price = $_POST['price'];
    $pro_quantity = $_POST['qunatity'];
    $pro_desc = $_POST['desc'];
    $pro_id = $_POST['id'];

    $update_q = "update products set name=? , pro_desc=? , price=? ,quantity=? where id=?";
    $stmt = $connection->prepare($update_q);
    $stmt->execute(
        [
            $pro_name , 
            $pro_desc ,
            $pro_price,
            $pro_quantity,
            $pro_id
        ]
    );
    header("location: ../details.php?product_id={$pro_id}");

}else{
    header("location: ../index.php");
}


?>