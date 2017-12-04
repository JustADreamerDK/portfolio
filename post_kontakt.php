<?php
$navn = $_POST['navn'];
$email = $_POST['email'];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Katja Kjer</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Sonsie+One" rel="stylesheet">
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
        <div class="content margin-tb-50">
            <?php
            if($navn <> '' && $email <> ''){
                ?>
                <h4>
                    Kære <?php echo $navn; ?>. <br>
                    Mange tak for din henvendelse, jeg bestræber mig på at svare alle henvendelser indenfor 3 hverdage.<br>
                    Du vil modtage svaret på din mail, <?php echo $email; ?>.
                </h4>
                <?php
            }else{
                ?>
                <h4>
                    Beskeden blev ikke sendt. <br>
                    Udfyld venligst alle felter og prøv igen.
                </h4>
                <?php
            }
            ?>
          <?php ?>
        </div>
      </div>
    </main>

    <?php
    include "include/footer.php";
    ?>
  </body>
</html>
