<?php 

include_once("inc/navbar.php");
require_once("inc/connection.php");
///extract poduct id from url 
$pro_id = $_GET['product_id'];
$get_details ="select * from products where id=?";
$stmt = $connection->prepare($get_details);
$stmt->execute([
    $pro_id
]);
$product = $stmt->fetch();
?>
<section class="container my-5">

    <div class="row">
        <div class="col-md-6">
            <img src="uploads/<?= $product['image'] ?>" alt="">
        </div>
        <div class="col-md-6">
            <h2>
                <?= $product['name']?>
                <span class="badge bg-danger"><?= $product['price']?> L.E</span>
            </h2>
            <p><?= $product['pro_desc']?></p>
            <p>Avaiable Quantity : <span class="text-danger"> <?= $product['quantity']?> </span>
        </p>
        </div>
    </div>

</section>

<?php 
include_once("inc/footer.php");
?>