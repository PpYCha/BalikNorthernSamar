<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'nsrrrdb');

// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'id13939868_databaseine');
// define('DB_PASSWORD', 'W|!7|H=y92T@W-9P');
// define('DB_NAME', 'id13939868_baliksamardb');
 
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