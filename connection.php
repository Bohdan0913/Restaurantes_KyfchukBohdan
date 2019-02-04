<?php
// Create connection

/*
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "restaurants");
*/
define("DB_HOST", "localhost");
define("DB_USER", "bkyfchuk");
define("DB_PASS", "12345678");
define("DB_NAME", "bkyfchuk");


$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>




