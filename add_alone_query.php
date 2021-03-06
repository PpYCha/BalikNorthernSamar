<?php

include 'dbConfig.php';

$statusMsg = '';
// File upload path travel
$targetDir = "assets/img/uploaded_travelPass/";
$temp = explode(".", $_FILES["file"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);  
$targetFilePath = $targetDir . $newfilename;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

// File upload path picRegistrant
$targetDir2 = "assets/img/uploaded_picRegistrant/";
$temp2 = explode(".", $_FILES["file2"]["name"]);
$newfilename2 = round(microtime(true)) . '.' . end($temp2);  
$targetFilePath2 = $targetDir2 . $newfilename2;
$fileType2 = pathinfo($targetFilePath2,PATHINFO_EXTENSION);

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
 $dateAdded = $mysqli->real_escape_string(date('y/m/d'));

 if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"]) && !empty($_FILES["file2"]["name"]) ){
  // Allow certain file formats
  $allowTypes = array('jpg','png','jpeg');
  if(in_array($fileType, $allowTypes)){
      // Upload file to server
     
      if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath) && move_uploaded_file($_FILES["file2"]["tmp_name"], $targetFilePath2)) {
          // Insert image file name into database

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
dateOfTravel,
dateAdded,
travelpass_path,
profilePic_path
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
'$dateOfTravel', 
'$dateAdded',
'$newfilename',
'$newfilename2'
)");

$mysqli->close();
header('Location:success_page.html');

exit;
      }
      }
      }
 
?>