<!DOCTYPE html>
<html lang="en">

<head>
    <title>Table V02</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->

</head>

<body>
    <?php

	//include 'dbConfig.php';
	$mysqli = new mysqli($servername = "localhost",  "root", "", "nslsidb");
	//$mysqli->query ("SELECT firstName, middleName, lastName, pointOfOrigin, municipality, dateOfTravel, contactNumberHead FROM applicants ORDER BY municipality ASC, firstName ASC");
	$sql = "SELECT AP_ID,firstName, middleName, lastName, pointOfOrigin, municipality, dateOfTravel, contactNumberHead FROM applicants ORDER BY municipality ASC, firstName ASC";

	$result = $mysqli->query($sql);
	$countL = 0;
	if ($result->num_rows > 0) {
		// output data of each row
		while ($row = $result->fetch_assoc()) {
			$countL++;
			echo '<tr>';
			echo "<td style='display:none;'>" . $row["AP_ID"]  .  "</td>";
			echo "<td> <a href='test.php'> " . $row["firstName"] . " " . $row["middleName"] . " " . $row["lastName"] . " " .  "</a></td>";

			echo "<td style='word-wrap: break-word;min-width: 160px;max-width: 160px;'>" . $row["pointOfOrigin"]  .  "</td>";
			echo "<td>" . $row["municipality"]  .  "</td>";
			echo "<td>" . $row["dateOfTravel"]  .  "</td>";
			echo "<td>" . $row["contactNumberHead"]  .  "</td>";
			echo '</tr>';
		}
	}

	$sql = "SELECT T1.AP_ID, T1.Name, T1.memContactNumber, T2.pointOfOrigin, T2.municipality, T2.dateOfTravel FROM members AS T1, applicants AS T2   WHERE T1.AP_ID = T2.AP_ID ORDER BY municipality ASC, firstName ASC";

	$result = $mysqli->query($sql);
	$countM = 0;
	if ($result->num_rows > 0) {

		// output data of each row
		while ($row = $result->fetch_assoc()) {
			$countM++;
			echo "<tr>";
			echo "<td style='display:none;'>" . $row["AP_ID"]  .  "</td>";
			echo "<td> <a href='applicants_profile.php'>" . $row["Name"]  . "</a></td>";
			echo "<td>" . $row["pointOfOrigin"]  .  "</td>";
			echo "<td>" . $row["municipality"]  .  "</td>";
			echo "<td>" . $row["dateOfTravel"]  .  "</td>";
			echo "<td>" . $row["memContactNumber"]  .  "</td>";
			echo '</tr>';
		}


               
			} else {
				echo "0 results";
			}
		
	
	$countAll = $countL + $countM;
	  
	?>
                 

    <!-- Script for Table Design-->


    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>