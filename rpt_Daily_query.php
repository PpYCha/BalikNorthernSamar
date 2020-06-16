<?php

//include 'dbConfig.php';
 $mysqli = new mysqli( $servername = "localhost",  "root", "", "nslsidb");
//$mysqli->query ("SELECT firstName, middleName, lastName, pointOfOrigin, municipality, dateOfTravel, contactNumberHead FROM applicants ORDER BY municipality ASC, firstName ASC");
$sql= "SELECT firstName, middleName, lastName, pointOfOrigin, municipality, dateOfTravel, contactNumberHead FROM applicants ORDER BY municipality ASC, firstName ASC";

$result = $mysqli->query($sql);
$countL = 0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $countL++;
      echo '<tr>';
      echo "<td> <a href=''>" . $row["firstName"] . " " . $row["middleName"]. " " . $row["lastName"]. " " .  "</a></td>";          
      echo "<td> </td>";     
      echo "<td>" . $row["pointOfOrigin"]  .  "</td>";      
      echo "<td>" . $row["municipality"]  .  "</td>";   
      echo "<td>" . $row["dateOfTravel"]  .  "</td>";      
      echo "<td>" . $row["contactNumberHead"]  .  "</td>";                    
     echo '</tr>';
     
    }


    
  } 

 $sql= "SELECT T1.Name, T1.memContactNumber, T2.pointOfOrigin, T2.municipality, T2.dateOfTravel FROM members AS T1, applicants AS T2   WHERE T1.AP_ID = T2.AP_ID ORDER BY municipality ASC, firstName ASC";

$result = $mysqli->query($sql);
$countM = 0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $countM++;
      echo '<tr>';
      echo "<td> <a href=''>" . $row["Name"]   . "</a></td>";          
      echo "<td> </td>";     
      echo "<td>" . $row["pointOfOrigin"]  .  "</td>";      
      echo "<td>" . $row["municipality"]  .  "</td>";   
      echo "<td>" . $row["dateOfTravel"]  .  "</td>";      
      echo "<td>" . $row["memContactNumber"]  .  "</td>";                    
     echo '</tr>';
     
    }


    
  }
$countAll = $countL + $countM;
  
?>