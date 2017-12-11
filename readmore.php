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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Rubik:700" rel="stylesheet">
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
            <div class="flex-column center-center">
            <?php
            $produktId = $row['id'];
            $img = getImagesById($produktId);
            $video = $row['video'];
            if($video <> ''){
                ?>
                <div class="slide">
                    <?php
                echo $video;
                ?>
              </div>
            <?php
              }
            while($rowImg = mysqli_fetch_assoc($img)){
                ?>
                <img class="slide fade produkt" src="img/<?php echo $rowImg['img'];?>">
            <?php
            }
             ?>
             <div class="flex space button">
                  <button onclick="plusDivs(-1)">&#10094;</button>
                  <button onclick="plusDivs(1)">&#10095;</button>
              </div>
            </div>
          <p><?php echo $row['tekst']; ?></p>
          <a href="portfolio.php">
            <h4 class="back hover">Tilbage</h4>
          </a>
        </div>
      </div>
    </main>

    <?php
    include "include/footer.php";
    ?>

    <!-- <script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("slide");
        for (i = 0; i < x.length; i++) {
           x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 4000);
        }
    </script> -->

    <script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
      showDivs(slideIndex += n);
    }

    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("slide");
      if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";
      }
      x[slideIndex-1].style.display = "block";
    }
    </script>


  </body>
</html>
