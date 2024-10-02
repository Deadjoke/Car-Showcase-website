<?php 
 include_once("inc/navbar.php");
 require_once("inc/connection.php");
$pro_id = $_GET['pro__id'];

$select_product = "select * from products where id =?";
$stmt = $connection->prepare($select_product);
$stmt->execute(
  [  $pro_id]
);
$product = $stmt->fetch();
?>
<section>
<div class="container my-5">
    <h1 class="text-center mb-3 text-danger">welcome to our  editing product page</h1>
    <form action="handlers/edit.php" method="POST">
        <input type="hidden" value="<?= $product['id'] ?>" name="id">
      <div class="mb-3">
         <label class="form-label">Product Name</label>
         <input type="text" class="form-control" name="name" value="<?= $product['name'] ?>">
      </div>
      <div class="mb-3">
         <label class="form-label">Product Price</label>
         <input type="text" class="form-control" name="price" value="<?= $product['price'] ?>">
      </div>
      <div class="mb-3">
         <label class="form-label">Product Qunatity</label>
         <input type="text" class="form-control" name="qunatity" value="<?= $product['quantity'] ?>">
      </div>
      <div class="mb-3">
         <label class="form-label">Product Description</label>
         <textarea type="text" class="form-control" name="desc">
            <?= $product['pro_desc'] ?>
         </textarea>
      </div>
      <div class="mb-3">
         <button type="submit" name="edit-btn" class="btn btn-danger">update Peoduct</button>
      </div>
    </form>
</div>
</section>

<?php include("inc/footer.php") ?>



