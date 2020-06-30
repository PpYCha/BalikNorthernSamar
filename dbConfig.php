<?php


define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'nsrrrdb');

// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'id13939868_database_ine');
// define('DB_PASSWORD', 'xf$GXL+j}>4z0<9o');
// define('DB_NAME', 'id13939868_nsrrrdb');
 
/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
else{
   // echo "Ok";
}
?>