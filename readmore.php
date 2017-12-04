<?php
session_start();
include "include/connect.php";
include "phpcode/crud.php";
$id = $_GET['id'];
$produkt = getProduct($id);
$row = mysqli_fetch_assoc($produkt)
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Katja Kjer</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Sonsie+One" rel="stylesheet">
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/include.css" rel="stylesheet">
    <link href="css/readmore.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/logo.png">
  </head>

  <body>
    <?php
    include "include/header.php";
    ?>

    <main>
      <div class="row black padding-tb-20">
        <div class="content">
          <h1 class="white"><?php echo $row['titel']; ?></h1>
        </div>
      </div>
      <div class="row">
        <div class="content">
          <img src="img/<?php echo $row['img'];?>">
          <p><?php echo $row['tekst']; ?></p>
          <a href="portfolio.php">
            <h4>Tilbage</h4>
          </a>
        </div>
      </div>
    </main>

    <?php
    include "include/footer.php";
    ?>
  </body>
</html>
