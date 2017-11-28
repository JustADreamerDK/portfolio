<!DOCTYPE html>
<html>
  <head>
    <title>Katja Kjer</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Sonsie+One" rel="stylesheet">
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/include.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/logo.png">
  </head>

  <body>
    <?php
    include "include/header.php";
    ?>

    <main>
      <div class="row black">
        <div class="content">
          <h1 class="white">Kontakt mig</h1>
        </div>
      </div>
      <div class="row">
        <div class="content">
          <form action="post_kontakt.php" method="post">
            <label for="navn">Navn:</label>
            <input type="text" name="navn">
            <label for="email">Mail:</label>
            <input type="email" name="email">
            <h3>
              Skriv besked
            </h3>
            <textarea name="besked" row="10" col="10">
            </textarea>
            <input type="submit" value="Send">
          </form>
        </div>
      </div>
    </main>

    <?php
    include "include/footer.php";
    ?>
  </body>
</html>
