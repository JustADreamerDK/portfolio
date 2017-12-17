<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width,initial-scale=1.0">
      <title>Katja Kjer</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Rubik:700" rel="stylesheet">
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/include.css" rel="stylesheet">
    <link href="css/kontakt.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/logo.png">
  </head>

  <body>
    <?php
    include "include/header.php";
    ?>

    <main>
      <div class="row black padding-tb-20">
        <div class="content">
          <h1 class="white">Kontakt mig</h1>
        </div>
      </div>
      <div class="row">
        <div class="content flex margin-tb-50 space indhold">
          <form action="post_kontakt.php" method="post">
                <div class="flex space">
            <label for="navn"><h3>Navn:</h3></label>
            <input type="text" name="navn" required>
                </div>
                <div class="flex space">
                    <label for="email"><h3>Mail:</h3></label>
                    <input type="email" name="email" required>
                </div>
            <h3>
              Skriv besked
            </h3>
            <textarea name="besked" row="10" col="10"></textarea>
            <div class="flex right">
                <input type="submit" value="Send">
            </div>
          </form>

          <div>
            <iframe src="https://www.google.com/maps/embed/v1/place?q=stensvang%2C%20odens&key=AIzaSyC7Mg_GNTIZdsJPim5u3A4SHa88h2hP2k4" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </main>

    <?php
    include "include/footer.php";
    ?>
  </body>
</html>
