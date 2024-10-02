<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Selling</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.xyz/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php
        session_start();

  ?>
<nav class="navbar navbar-expand-lg bg-info">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="index.php">3rabety</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="products.php">Products</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Contact us
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">012456789</a></li>
            <li><a class="dropdown-item" href="#">015478922</a></li>
            <li><a class="dropdown-item" href="#">fake@gmail.com</a></li>
          </ul>
        </li>
        <?php if($_SESSION && $_SESSION['user_role'] == "admin") {?>
        <li class="nav-item">
          <a class="nav-link active text-light"  aria-current="page" href="create.php">Create Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-light"  aria-current="page" href="create.php">Create Category</a>
        </li>
        <?php } ?>
        <?php 
        if(! $_SESSION){
        ?>
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="register.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="login.php">Login</a>
        </li>
        <?php }else{ ?>
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="logout.php">welcome
            <?= $_SESSION['user_name'] ?>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="logout.php">Logout</a>
        </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>