
<?php 
include_once("inc/navbar.php");
require_once("inc/connection.php");

$get_all_q = "select * from products order by id desc";
$stmt = $connection->prepare($get_all_q);
$stmt->execute();
$products = $stmt->fetchAll();
?>
<section>
    <div class="container my-5">
        <h1 class="text-center mb-3 text-danger">welcome to our  products page</h1>
        
        <input type="text" class="form-control">
        <button class="btn btn-danger my-3 form-control">search</button>
        <div class="container">
            <div class="row">
                    <?php foreach($products as $product) {?>
                    <div class="col-md-4 my-3">
                        <div class="card">
                            <img src="uploads/<?= $product['image'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                 <h5 class="card-title"><?= $product['name']?></h5>
                                 <p class="card-text"><?= $product['pro_desc']?></p>
                                 <a href="details.php?product_id=<?= $product['id']?>" class="btn btn-primary">Details</a>
                            </div>
                        </div>
                    </div>
                    <?php  } ?>
                </div>
            </div>
            <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
        </div>
</section>

<?php include("inc/footer.php") ?>