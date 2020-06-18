<?php

  include 'dbConfig.php';

  $statusMsg = '';
// File upload path
$targetDir = "assets/img/uploaded_travelPass/";
$temp = explode(".", $_FILES["file"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);  
$targetFilePath = $targetDir . $newfilename;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
  

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

$memberFName = $_POST['memberFName'];
$memberContactNum = $_POST['memberContactNum'];
$memberAddrs = $_POST['memberAddrs'];

if (isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg');
    if (in_array($fileType, $allowTypes)) {
        // Upload file to server
     
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
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
travelpass_path
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
'$newfilename'
)");
        
            $id = mysqli_insert_id($mysqli);

            //echo $id;
            $i = 0;
            $j = 0;
            $h = 0;
            while ($i < sizeof($memberFName) || $j < sizeof($memberContactNum) || $h < sizeof($memberAddrs)) {
                if (strlen($memberFName[$i]) != 0 && strlen($memberContactNum[$i]) != 0  && strlen($memberAddrs[$i]) != 0) {
                    $mysqli->query(
                        "INSERT INTO `members`
    (
        AP_ID,
        `Name`
        ,`memContactNumber`
        ,`memAddr`
    ) 
    VALUES 
    (
        '$id',
        '$memberFName[$i]',
        '$memberContactNum[$j]',
        '$memberAddrs[$h]'
    )"
                    );

                    $i++;
                    $j++;
                    $h++;
                }
            }
            $mysqli->close();
            header('Location:success_page.html');
        }
    }
}

?>