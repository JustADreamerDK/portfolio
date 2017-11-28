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
            <li><a href=""><h4>Still billeder</h4></a></li>
            <li><a href=""><h4>Levende billeder</h4></a></li>
            <li><a href=""><h4>Hjemmesider</h4></a></li>
          </ul>
        </div>
        <div class="content">
          <div class="flex wrap space">

            <div class="box margin-tb-20 ">
              <div class="flex center-center">
                <h2 class="margin-tb-20">Julefotografering</h2>
              </div>
              <img class="produkt" src="img/olina.jpg">
              <p>
                Alcatra capicola tongue picanha pork loin. Venison meatloaf...
              </p>
              <a href="readmore.php"><h4 class="margin-t-5">Læs mere</h4></a>
            </div>

            <div class="box margin-tb-20 ">
              <div class="flex center-center">
                <h2 class="margin-tb-20">Danish Supertourisme</h2>
              </div>
              <img class="produkt" src="img/dst.jpg">
              <p>
                Alcatra capicola tongue picanha pork loin. Venison meatloaf...
              </p>
              <a href="readmore.php"><h4 class="margin-t-5">Læs mere</h4></a>
            </div>

            <div class="box margin-tb-20 ">
              <div class="flex center-center">
                <h2 class="margin-tb-20">Fyens Kennel Klub</h2>
              </div>
              <img class="produkt" src="img/fkk.jpg">
              <p>
                Alcatra capicola tongue picanha pork loin. Venison meatloaf...
              </p>
              <a href="readmore.php"><h4 class="margin-t-5">Læs mere</h4></a>
            </div>

            <div class="box margin-tb-20 ">
              <div class="flex center-center">
                <h2 class="margin-tb-20">SEPE Extreme Challenge 2017</h2>
              </div>
              <img class="produkt" src="img/sepe.jpg">
              <p>
                Alcatra capicola tongue picanha pork loin. Venison meatloaf...
              </p>
              <a href="readmore.php"><h4 class="margin-t-5">Læs mere</h4></a>
            </div>


          </div>
        </div>
      </div>
    </main>

    <?php
    include "include/footer.php";
    ?>
  </body>
</html>
