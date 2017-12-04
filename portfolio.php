<?php
session_start();
include "include/connect.php";
include "phpcode/crud.php";
$type = $_GET['type'];
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
    <link href="css/portfolio.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/logo.png">
  </head>

  <body>
    <?php
    include "include/header.php";
    ?>

    <main>
      <div class="row black padding-tb-20">
        <div class="content">
          <h1 class="white">Portfolio</h1>
        </div>
      </div>
      <div class="row">
        <div class="content flex center-center margin-t-20">
          <ul class="flex nav space">
            <li><a href="portfolio.php"><h4>Alle</h4></a></li>
            <li><a href="portfolio.php?type=still"><h4>Still billeder</h4></a></li>
            <li><a href="portfolio.php?type=levende"><h4>Levende billeder</h4></a></li>
            <li><a href="portfolio.php?type=hjemmeside"><h4>Hjemmesider</h4></a></li>
          </ul>
        </div>
        <div class="content">
          <div class="flex wrap space">
              <?php
              if($type <> ''){
                  $produkt = getProductByType($type);
                  while ($row = mysqli_fetch_assoc($produkt)){
                  ?>
                <div class="box margin-tb-20 ">
                  <div class="flex center-center">
                    <h2 class="margin-tb-20"><?php echo $row['titel']; ?></h2>
                  </div>
                  <img class="produkt" src="img/<?php echo $row['img'];?>">
                  <p>
                      <?php
                      $beskrivelse = mb_substr($row['tekst'], 0, 50, 'UTF-8');
                      $tal = mb_strrpos($beskrivelse, ' ', 0, 'UTF-8');
                      $beskrivelse = mb_substr($row['tekst'], 0, $tal, 'UTF-8');
                      echo $beskrivelse . '...';
                      ?>
                  </p>
                  <a href="readmore.php?id=<?php echo $row['id'];?>"><h4 class="margin-t-5">Læs mere</h4></a>
                </div>
                <?php
                }
              }else{
              $produkter = getProducts();
              while ($multirow = mysqli_fetch_assoc($produkter)){
              ?>
            <div class="box margin-tb-20 ">
              <div class="flex center-center">
                <h2 class="margin-tb-20"><?php echo $multirow['titel']; ?></h2>
              </div>
              <img class="produkt" src="img/<?php echo $multirow['img'];?>">
              <p>
                  <?php
                  $beskrivelse = mb_substr($multirow['tekst'], 0, 50, 'UTF-8');
                  $tal = mb_strrpos($beskrivelse, ' ', 0, 'UTF-8');
                  $beskrivelse = mb_substr($multirow['tekst'], 0, $tal, 'UTF-8');
                  echo $beskrivelse . '...';
                  ?>
              </p>
              <a href="readmore.php?id=<?php echo $multirow['id'];?>"><h4 class="margin-t-5">Læs mere</h4></a>
            </div>
            <?php
            }
            }
             ?>

          </div>
        </div>
      </div>
    </main>

    <?php
    include "include/footer.php";
    ?>
  </body>
</html>
