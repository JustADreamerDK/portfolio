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
        <div class="content flex margin-tb-50 space">
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
              <div>
                  <div>
                      <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
                      <div class="margin-t-10" style='overflow:hidden;height:400x;
                           width:500px;'>
                          <div id='gmap_canvas' style='height:375px;
                               width:500px;'>
                           </div>
                          <style>#gmap_canvas img{
                                  max-width:none!important;
                                  background:none!important
                              }
                          </style>
                      </div>
                      <script type='text/javascript'>
                          function init_map() {
                              var myOptions = {
                                  zoom: 15, center: new google.maps.LatLng(55.3424924, 10.3155309, 16.75), mapTypeId: google.maps.MapTypeId.ROADMAP
                              };
                              map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                              marker = new google.maps.Marker({
                                  map: map, position: new google.maps.LatLng(55.3424924, 10.3155309, 16.75)
                              });
                              infowindow = new google.maps.InfoWindow({
                                  content: '<h4>Den kreative base</h4>'}
                              );
                              google.maps.event.addListener(marker, 'click', function () {
                                  infowindow.open(map, marker);
                              }
                              );
                              infowindow.open(map, marker);
                          }
                          google.maps.event.addDomListener(window, 'load', init_map);
                      </script>
          </div>
        </div>
      </div>
    </main>

    <?php
    include "include/footer.php";
    ?>
  </body>
</html>
