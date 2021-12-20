<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php include "./components/head_links.php"?>
    <title>PGLife</title>
  </head>
  <body>
    <?php include "./components/header.php"?>
    <div id="loading"></div>
    <div class="banner sticky-top" id="banner"></div>
    <div class="banner_content sticky-top">
      <div class="searchInput ">
        <div class="heading">
          <h1 class="display-1 text-light">Happiness per square foot</h1>
        </div>
        <div class="input_box">
          <input type="text" placeholder=" Search your pg.." style="width: 400px;"/>
          <button type="button" class="btn">Search</button>
        </div>
      </div>
    </div>
    <div class="cities">
      <div class="cityHead"><h1>Major Cities</h1></div>
      <div class="cityIcon">
        <div class="delhi"><a href="./property_list.php?city=Delhi"> <img class="img-thumbnail" src="./img/delhi.png" /> </a></div>
        <div class="mumbai"><a href="./property_list.php?city=Mumbai"> <img class="img-thumbnail" src="./img/mumbai.png" /> </a></div>
        <div class="Bengaluru"><a href="./property_list.php?city=Bengaluru"> <img class="img-thumbnail" src="./img/chennai.png" /> </a></div>
        <div class="hyderabad"><a href="./property_list.php?city=Hyderabad"> <img class="img-thumbnail"  src="./img/hyderabad.png" /> </a></div>
      </div>
    </div>
    <!-- footer -->
    <?php include "./components/footer.php"?>
    <!-- signup modal -->
    <?php include "./components/signup_modal.php" ?>
    <!-- login modal -->
    <?php include "./components/login_modal.php"?>
  </body>
</html>
