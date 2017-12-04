<?php
session_start();
include "include/connect.php";
include "phpcode/crud.php";
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
            <a href="readmore.php?id=<?php echo $row['id'];?>">
              <div class="box">
                <img class="produkt" src="img/<?php echo $row['img'];?>">
                <div class="flex center-center titel row padding-tb-20">
                  <h2 class="white"><?php echo $row['titel']; ?></h2>
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
  </body>
</html>
