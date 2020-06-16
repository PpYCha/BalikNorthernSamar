
<?php



if(isset($_POST['submit'])) {

 //$mysqli = new mysqli( $servername = "localhost",  "root", "", "nslsidb");
 include 'dbConfig.php';

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
dateOfTravel,
dateAdded
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
'$dateAdded'
)");


$id = mysqli_insert_id($mysqli);

echo $id;
$i = 0;
$j = 0;
$h = 0;
while($i < sizeof($memberFName) || $j < sizeof($memberContactNum) || $h < sizeof($memberAddrs)) 
{
  if(strlen($memberFName[$i]) != 0 && strlen($memberContactNum[$i]) != 0  && strlen($memberAddrs[$i]) != 0){
    $mysqli->query
        (
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
}

header('Location:index.html');
?>