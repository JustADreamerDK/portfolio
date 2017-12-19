<?php
session_start();
include "include/connect.php";
include "phpcode/crud.php";
?>
<!DOCTYPE html>
<html lang="da">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Katja Kjer</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Rubik:700" rel="stylesheet">
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/include.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/logo.png">
  </head>

  <body>
    <?php
    include "include/header.php";
    ?>

    <main>
      <div class="row hover">
            <?php
            $produkt = getThreeProducts();
            while ($row = mysqli_fetch_assoc($produkt)){
            ?>
            <a class="slide fade" href="readmore.php?id=<?php echo $row['id'];?>">
              <div class="box flex center-center">
                  <img class="produkt" src="img/<?php echo $row['cover_img'];?>" alt="produkt cover">
                    <div class="titel padding-tb-20">
                        <h4 class="white">Læs om projektet</h4>
                    </div>
              </div>
            </a>
          <?php
      }
       ?>
      </div>
    </main>

    <?php
    include "include/footer.php";
    ?>

    <script>
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
        setTimeout(carousel, 7500);
        }
    </script>
  </body>
</html>
