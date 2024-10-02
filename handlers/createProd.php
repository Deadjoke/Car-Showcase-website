<?php 

require_once("../inc/connection.php");
if(isset($_POST['add-btn'])){
    //get data from form 
    $poduct_name = $_POST['name'];
    $poduct_price = $_POST['price'];
    $poduct_qunatity = $_POST['qunatity'];
    $poduct_desc = $_POST['desc'];
    $ad_phone = $_POST['phone'];
    
    //handle image
    $product_image = $_FILES['image'];
    $prod_img_name = $product_image['name'];
    $prod_img_name = uniqid() . $prod_img_name;
    $prod_location = $product_image['tmp_name'];
    move_uploaded_file($prod_location , "../uploads/$prod_img_name");

    //insert in DB
    $insert_product = "insert into products (name , pro_desc , price , quantity , image ) values
    (?,?,?,?,?)";
    $stmt = $connection->prepare($insert_product);
    $stmt->execute([
        $poduct_name , 
        $poduct_desc ,
        $poduct_price ,
        $poduct_qunatity  ,
        $prod_img_name
    ]);
    header("location: ../index.php");
    
}else{
    header("location: ../create.php");
}


?>



