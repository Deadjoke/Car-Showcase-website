<?php 

$pro_id = $_GET['pro__id'];
require_once("inc/connection.php");
$delete_q = "DELETE FROM products where id = ?";
$stmt =$connection->prepare($delete_q);
$stmt->execute(
    [$pro_id]
);
header("location: index.php");
?>