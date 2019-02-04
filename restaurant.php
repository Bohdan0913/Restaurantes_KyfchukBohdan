<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  
    
    <link rel="stylesheet" href="css/css.css">

  </head>
  <body background="https://i0.wp.com/www.silocreativo.com/wp-content/uploads/2014/06/patron-restaurante.jpg?resize=666%2C420&quality=100&strip=all&ssl=1">
      
  <div class="jumbotron">
    <div class="container">
      <div class="row">
        <div class="col-xs-4">
          <img src="https://seeklogo.com/images/R/restaurant-logo-4B7844CB05-seeklogo.com.png">
        </div>
        <div class="col-xs-4 col-sm-6 col-md-7">
          <h1>Restaurante Genius</h1> 
          <p>Para toda la familia, entra y disfruta</p> 
        </div>
      </div>
    </div>
  </div>

<!-- Navbar -->

<div class="container">
  <div class="row"> 
    <!--<div col="col-xs-3 col-sm-4 col-md-6"> -->  
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php">Restaurants Genius</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Restaurants</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
      <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      
      <label for="input-id" class="col">order:</label>
      
      <select name="order" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option value="0" >Ascending</option>
        <option value="1" >Descending</option>
      </select>
      <button type="submit" class="btn btn-primary">Search</button>
    </form>
    
      </div>
    </nav>
  
  </div>
</div>






<div class="container">



    <?php
require_once "connection.php";
include_once "restaurantsdb.php";
//print_r($_REQUEST);
//En $_REQUEST tiene la ID de lrestaurante clicada, la metemos en una variable para tener la ID clicada guardado.
$id = $_REQUEST["id"];

//Funcion que devuelve el ID del restaurante clicado
$var = getRestaurant($id);

foreach ($var as $v){         // Para cada array se ejecutará el codigo de abajo
/*
echo $v["name"];
echo $v["locality"];
echo $v["route"];
 }*/
?>


  <div class="row rest">                                      <!-- Esta estructura se creará para cada una de las arrays -->
    <div class="col-xs-3 col-sm-4 col-md-6">
      <div class="boton"><button type="button" class="btn bto"><a class="btn bto" href="index.php">Back</a></button></div>
      <h1><?= $v["name"]?></h1>
      <h5>ID - <?=$v["id"]?></h5>
      <h5><?=$v["description"]?></h5>
      <h5><?=$v["openingHours"]?></h5>
      <h5><?=$v["priceCategory"]?></h5>
      <h5><?=$v["locality"]?></h5>
      <h5><?=$v["route"]?></h5>
      <h5>St: <?=$v["streetNumber"]?></h5>
      <h5>Postal Code: <?=$v["postalCode"]?></h5>
      <h5>Latitude: <?=$v["latitude"]?></h5>
      <h5>Longitude: <?=$v["longitude"]?></h5>
      <h5><?=$v["website"]?></h5>
      <h5>Contact: <?=$v["email"]?></h5>
      <h5>Rating: <?=$v["rating"]?></h5>
      <h5>Trending: <?=$v["isTrending"]?></h5>

    </div>
    <div class="col">
      <div class="imagen"><img src='<?= $v["filePath"]?>'></div>
    </div>
  </div>
      <?php
      }
?>


</div><!--END CONTAINER-->
 

<!-- Footer -->

<div class="container footer">
  <div class="footer-copyright text-center py-3">© 2018 Copyright IAW Kyfchuk Bohdan
      </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>