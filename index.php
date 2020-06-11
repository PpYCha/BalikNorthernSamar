<?php



if(isset($_POST['submit'])) {

 $mysqli = new mysqli( $servername = "localhost",  "root", "", "nslsidb");


 $firstName =  $mysqli->real_escape_string($_POST["firstName"]);
 $middleName = $mysqli->real_escape_string( $_POST['middleName']);
 $lastName =  $mysqli->real_escape_string($_POST['lastName']);
 $dateOfBirth =  $mysqli->real_escape_string($_POST['dateOfBirth']);
 $civilStatus =  $mysqli->real_escape_string($_POST['civilStatus']);
 $presentCompleteAddress =  $mysqli->real_escape_string($_POST['presentCompleteAddress']);
 $contactNumberHead = $mysqli->real_escape_string( $_POST['contactNumberHead']);
 $emailHead =  $mysqli->real_escape_string($_POST['emailHead']);
 $altContactNumberHead = $mysqli->real_escape_string( $_POST['altContactNumberHead']);
 $altEmailHead = $mysqli->real_escape_string( $_POST['altEmailHead']);
 $province =  "Northern Samar";
 $municipality = $mysqli->real_escape_string( $_POST['municipality']);
 $vehicleToBeUsed =  $mysqli->real_escape_string($_POST['vehicleToBeUsed']);
 $pointOfOrigin =  $mysqli->real_escape_string($_POST['pointOfOrigin']);
 $dateOfTravel =  $mysqli->real_escape_string($_POST['dateOfTravel']);



// Create connection
 
// Check connection
  if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
  } 

  $mysqli->query("INSERT INTO applicants 
  (
firstName,
middleName,
lastName,
dateOfBirth,
civilStatus,
presentCompleteAddress,
contactNumberHead,
emailHead,
altContactNumberHead,
altEmailHead,
province,
municipality,
vehicleToBeUsed,
pointOfOrigin,
dateOfTravel
)
VALUES 
(
  '$firstName',
'$middleName',
'$lastName ',
'$dateOfBirth ',
 '$civilStatus ',
 '$presentCompleteAddress ',
 '$contactNumberHead ',
 '$emailHead ',
 '$altContactNumberHead ',
 '$altEmailHead ',
'$province ',
'$municipality',
'$vehicleToBeUsed ',
'$pointOfOrigin',
'$dateOfTravel'
)");

if($mysqli->error){
  echo "error";
}else{
  echo "Salamat shoppe";
  header('Location:index.html');
}



$mysqli->close();
}



?>