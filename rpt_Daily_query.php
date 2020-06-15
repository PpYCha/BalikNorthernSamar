<?php

//include 'dbConfig.php';
 $mysqli = new mysqli( $servername = "localhost",  "root", "", "nslsidb");
//$mysqli->query ("SELECT firstName, middleName, lastName, pointOfOrigin, municipality, dateOfTravel, contactNumberHead FROM applicants ORDER BY municipality ASC, firstName ASC");
$sql= "SELECT firstName, middleName, lastName, pointOfOrigin, municipality, dateOfTravel, contactNumberHead FROM applicants ORDER BY municipality ASC, firstName ASC";

$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["firstName"]. " - Name: " . $row["middleName"]. " " . $row["lastName"]. "" .  "<br>";
    }
  } else {
    echo "0 results";
  }
?>

