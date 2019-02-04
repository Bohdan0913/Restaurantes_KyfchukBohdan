<?php
require_once "connection.php";
function getRestaurants($query, $order){      // creamos una funcion con una array que contiene 5 arrays
  
  global $db;

  $sql = "SELECT r.id,r.name,r.description,r.openingHours,r.priceCategory,r.locality,r.route,
  r.streetNumber,r.postalCode,r.latitude,r.longitude,r.phoneNumber,r.website,r.email,
  r.rating,r.isTrending,image.filePath FROM restaurant r,image WHERE r.id=image.restaurantId";
  $result = mysqli_query ($db, $sql);
  #$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

  #print_r($result)
  /*$data = [];
  while ($row = mysqli_fetch_query($result)){
    $data[] = $row; 
  }*/

  $data = mysqli_fetch_all($result,MYSQLI_ASSOC);

  mysqli_free_result($result);
  mysqli_close($db);



  return $data;
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  /*
  $restaurants = [
    array(
    "name" =>"Vandal",
    "locality" =>"Palma",
    "route" =>"calle Jupiter",
    "streetnumber" =>"456",
    "postalcode" =>"07007",
    "phonenumber" =>"871 509 530",
    "img" =>"https://media-cdn.tripadvisor.com/media/photo-f/13/96/79/6f/d-e-l-i-c-i-o-u-s.jpg"
    ),
    array(
      "name" =>"Tomeu Restaurant",
      "locality" =>"Alcudia",
      "route" =>"calle Saturno",
      "streetnumber" =>"655",
      "postalcode" =>"07889",
      "phonenumber" =>"655 554 245", 
      "img" =>"https://media-cdn.tripadvisor.com/media/photo-f/07/15/42/a6/wine-industry.jpg"
    ),
    array(
      "name" =>"Quetlas",
      "locality" =>"Sineu",
      "route" =>"calle Marte", // $restaurants[2]["route"]
      "streetnumber" =>"766",
      "postalcode" =>"06556",
      "phonenumber" =>"687 346 988", 
      "img" =>"https://media-cdn.tripadvisor.com/media/photo-f/0f/8c/c6/e1/nuestro-restaurante.jpg"
    ),
    array(
      "name" =>"Cocina Mestiza",
      "locality" =>"Calviá",
      "route" =>"calle Agora",
      "streetnumber" =>"778",
      "postalcode" =>"07766",
      "phonenumber" =>"622 234 344", 
      "img" =>"https://media-cdn.tripadvisor.com/media/photo-f/14/4b/08/83/nuestra-terraza.jpg"
    ),
    array(
      "name" =>"Grill Master",
      "locality" =>"Felanich",
      "route" =>"calle Nocturn",
      "streetnumber" =>"876",
      "postalcode" =>"07001",
      "phonenumber" =>"609 999 234", 
      "img" =>"https://media-cdn.tripadvisor.com/media/photo-f/11/9e/8b/83/tim.jpg"
    ),
    ];
    if(!empty($query)){     //Si la busqueda NO esta vacia:
        //echo "Cercar ".$query."<br>";
        $trobat = [];
        foreach($restaurants as $key => $value){
            if (strpos(strtoupper($value["name"]),strtoupper($query))!==FALSE){
                $trobat[] = $value; //array busqueda
            }
        }
       // return $trobat;
    } else {
        $trobat=$restaurants; //array tal cual
        //echo "ordenar: $order";
        //echo "No hay nada que cercar<br>";
    }

    if ($order == 0) {
        //echo "Ascending";
        asort($trobat);
    } else {
        //echo "Descending";
        arsort($trobat);
        
    }
    return $trobat;*/
}

/*
$ar = getRestaurants(
    isset($_REQUEST["search"])?$_REQUEST["search"]:"",
    isset($_REQUEST["order"])?$_REQUEST["order"]:"");
//print_r($ar);
*/



  //return $restaurants;
?>