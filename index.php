<?php 

include_once("inc/navbar.php");

?>
<?php 

require_once("inc/connection.php");
$get_products_q = "SELECT * FROM products order by id desc limit 3";
$stmt = $connection->prepare($get_products_q);
$stmt->execute();//IN DB
$products = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="css/style1.css">
  <title>Car Selling</title>
</head>
<body>
<section>
<div class="bigsection">
    <div id="supermain" class="smallersection">
        <div class="sector1">
            <h6 class="talk" id="wemen">  Welcome To 3rabity</h6>
            <h1 class="talk" id="words">Slick.Modern.<br>Awesome.</h1>
            <button class="shopcol" >Shop collection</button>
        </div>
    <div class="section2">
        <img src="Images/purepng.com-mercedes-benz.png">
    </div>
    </div>
</div>
<div onclick="toggleClass()" id="customee" >
    <i id= "kora" class="fa-solid fa-palette"></i>
    <p id="heroo" class="hero">Customize</p>
</div>
<div id="lo7a" class="editor">
    <div class="store">
        <div class="firstsec">
        <p class="boss">car selling</p>
        <i id="xsiqn" class="fa-regular fa-x"></i>
        </div>
    </div>

    <div class="secndsec">
        <p id="garden" class="talk">Use the template as-is or try different<br>
                                    colors and fonts from the options below</p>
       <div class="textt1">
           <span id="garden2" class="talk">Try Other Color</span>
           <span id="smth" class="talk">Default</span>
       </div>
    </div>
<div class="bigdivee">
    <div id="mainclr" class="thrdsec">
        <span class="colore12">Default colors</span>
        <div id="firstclr1" class="dives">
            <div class="dive1"></div>
            <div class="dive2"></div>
            <div class="dive3"></div>
            <div class="dive4"></div>
            <div class="dive5"></div>
        </div>
    </div>
</div>
<div class="bigdive1">
    <div id="secdclr" class="dives2">
        <div class="divee1"></div>
        <div class="divee2"></div>
        <div class="divee3"></div>
        <div class="divee4"></div>
        <div class="divee5"></div>
    </div>


    <div id="thrdclr" class="dives3">
        <div class="div1"></div>
        <div class="div2"></div>
        <div class="div3"></div>
        <div class="div4"></div>
        <div class="div5"></div>
    </div>

</div>


<div  class="bigdive2">
    <div id="frthclr" class="dives4">
        <div class="dev1"></div>
        <div class="dev2"></div>
        <div class="dev3"></div>
        <div class="dev4"></div>
        <div class="dev5"></div>
    </div>


    <div id="fifthclr" class="dives5">
        <div class="devs1"></div>
        <div class="devs2"></div>
        <div class="devs3"></div>
        <div class="devs4"></div>
        <div class="devs5"></div>
    </div>

</div>

<div class="bigdive3">
    <div id="oneclr" class="dives6">
        <div class="dsv1"></div>
        <div class="dsv2"></div>
        <div class="dsv3"></div>
        <div class="dsv4"></div>
        <div class="dsv5"></div>
    </div>


    <div id="twoclr" class="dives7">
        <div class="dsvs1"></div>
        <div class="dsvs2"></div>
        <div class="dsvs3"></div>
        <div class="dsvs4"></div>
        <div class="dsvs5"></div>
    </div>
</div>

<div class="bigdive4">
    <div id="threeclr" class="dives8">
        <div class="dvd1"></div>
        <div class="dvd2"></div>
        <div class="dvd3"></div>
        <div class="dvd4"></div>
        <div class="dvd5"></div>
    </div>


    <div id="fourclr" class="dives9">
        <div class="dvds1"></div>
        <div class="dvds2"></div>
        <div class="dvds3"></div>
        <div class="dvds4"></div>
        <div class="dvds5"></div>
    </div>
</div>
<hr class="strrr">


<div class="textt2">
<span id="garden3" class="talk">Try Other Color</span>
<span id="smthyy" class="talk">Default</span>
</div> 

<div id="poppinss" class="talk">
  <span class="fontty">Poppins / poppins</span>
</div>

<div class="fontss">
    <div class="fstfor">
        <div id="oneee" class="oneee">
            <h4 id="alpha1">Aa</h4>
        </div>
        <div id="twoo" class="twoo">
            <h4 id="alpha2">Aa</h4>
        </div>
        <div id="threee" class="threee">
            <h4 id="alpha3">Aa</h4>
        </div>
        <div id="foore" class="foore">
            <h4 id="alpha4">Aa</h4>
        </div>
    </div>
    <div class="scdfor">
        <div id="une" class="une">
            <h4 id="alpha5">Aa</h4>
        </div>
        <div id="dous" class="dous">
            <h4 id="alpha6">Aa</h4>
        </div>
        <div id="trous" class="trous">
            <h4 id="alpha7">Aa</h4>
        </div>
        <div id="qutre" class="qutre">
            <h4 id="alpha8">Aa</h4>
        </div>
    </div>
</div>
</div>

    <div class="container my-5">
        <h1 class="text-center mb-3 text-danger">Latest Products</h1>
        <div class="row">
            <?php foreach($products as $product){ ?>
            <div class="col-md-4">
              <div class="card">
                <img src="uploads/<?= $product['image']; ?>" class="card-img-top" alt="<?= $product['name'] ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $product['name']  ?>
                    <span class="bg-danger badge"><?= $product['price'] ?> L.E</span>
                 </h5>
                    <p class="card-text"><?= $product['pro_desc'] ?></p>
                    <a href="details.php?product_id=<?= $product['id']?>" class="btn btn-primary">Details</a>
                    <!-- only for admins , -->
                    <?php if($_SESSION  && $_SESSION['user_role'] == "admin") {?>
                    <a href="edit.php?pro__id=<?= $product['id']?>" class="btn btn-success">edit</a>
                    <a href="delete.php?pro__id=<?= $product['id']?>" class="btn btn-danger">Delete</a>
                    <?php } ?>
                </div>
              </div>
            </div>
            <?php } ?>
            
            
          </div>
        </div>
      </section>
      <?php include("inc/footer.php") ?>
      <script src="script.js"></script>
    </body>
  </html>

