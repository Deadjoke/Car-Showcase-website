<?php include("inc/navbar.php") ?>
<section>
    <div class="container my-5">
        <h1 class="text-center mb-3 text-danger">welcome to our create new product page</h1>
        <form action="handlers/createProd.php" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
             <label class="form-label">Product Name</label>
             <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
             <label class="form-label">Product Price</label>
             <input type="text" class="form-control" name="price">
          </div>
          <div class="mb-3">
             <label class="form-label">Product Qunatity</label>
             <input type="text" class="form-control" name="qunatity">
          </div>
          <div class="mb-3">
             <label class="form-label">Product Description</label>
             <textarea type="text" class="form-control" name="desc"></textarea>
          </div>
          <div class="mb-3">
             <label class="form-label">Product Image</label>
             <input type="file" class="form-control" name="image">
          </div>
          <div class="mb-3">
             <button type="submit" name="add-btn" class="btn btn-danger">Add Product</button>
          </div>
        </form>
    </div>
</section>

<?php include("inc/footer.php") ?>

