<!DOCTYPE html>
<html lang="en">

<head>
    <title>Table V02</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="tabledesign/Table_Responsive_v2/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="tabledesign/Table_Responsive_v2/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="tabledesign/Table_Responsive_v2/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="tabledesign/Table_Responsive_v2/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="tabledesign/Table_Responsive_v2/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="tabledesign/Table_Responsive_v2/vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="tabledesign/Table_Responsive_v2/css/util.css">
    <link rel="stylesheet" type="text/css" href="tabledesign/Table_Responsive_v2/css/main.css">
    <!--===============================================================================================-->
</head>

<body>
    <?php

	//include 'dbConfig.php';
	$mysqli = new mysqli($servername = "localhost",  "root", "", "nslsidb");
	//$mysqli->query ("SELECT firstName, middleName, lastName, pointOfOrigin, municipality, dateOfTravel, contactNumberHead FROM applicants ORDER BY municipality ASC, firstName ASC");
	$sql = "SELECT firstName, middleName, lastName, pointOfOrigin, municipality, dateOfTravel, contactNumberHead FROM applicants ORDER BY municipality ASC, firstName ASC";

	$result = $mysqli->query($sql);
	$countL = 0;
	if ($result->num_rows > 0) {
		// output data of each row
		while ($row = $result->fetch_assoc()) {
			$countL++;
			echo '<tr>';
			echo "<td> <a href=''>" . $row["firstName"] . " " . $row["middleName"] . " " . $row["lastName"] . " " .  "</a></td>";
			echo "<td> </td>";
			echo "<td>" . $row["pointOfOrigin"]  .  "</td>";
			echo "<td>" . $row["municipality"]  .  "</td>";
			echo "<td>" . $row["dateOfTravel"]  .  "</td>";
			echo "<td>" . $row["contactNumberHead"]  .  "</td>";
			echo '</tr>';
		}
	}

	$sql = "SELECT T1.Name, T1.memContactNumber, T2.pointOfOrigin, T2.municipality, T2.dateOfTravel FROM members AS T1, applicants AS T2   WHERE T1.AP_ID = T2.AP_ID ORDER BY municipality ASC, firstName ASC";

	$result = $mysqli->query($sql);
	$countM = 0;
	if ($result->num_rows > 0) {

		// output data of each row
		while ($row = $result->fetch_assoc()) {
			$countM++;
			echo "<tr>";
			echo "<td> <a href=''>" . $row["Name"]  . "</a></td>";
			echo "<td> </td>";
			echo "<td>" . $row["pointOfOrigin"]  .  "</td>";
			echo "<td>" . $row["municipality"]  .  "</td>";
			echo "<td>" . $row["dateOfTravel"]  .  "</td>";
			echo "<td>" . $row["memContactNumber"]  .  "</td>";
			echo '</tr>';
		}

		while ($row = $result->fetch_assoc()) {
	?>


    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table">

                    <div class="row header">
                        <div class="cell">
                            Full Name
                        </div>
                        <div class="cell">
                            Travel Company
                        </div>
                        <div class="cell">
                            Place of Origin
                        </div>
                        <div class="cell">
                            Destination LGU
                        </div>
                        <div class="cell">
                            Travel Date
                        </div>
                        <div class="cell">
                            Contact No.
                        </div>
                    </div>

                    <div class="row">
                        <div class="cell" data-title="Full Name">
                            <?php echo $row["firstName"] . " " . $row["middleName"] . " " . $row["lastName"]; ?>
                        </div>
                        <div class="cell" data-title="pointOfOrigin">
                            <?php echo $row["pointOfOrigin"]; ?>
                        </div>
                        <div class="cell" data-title="municipality">
                            <?php echo $row["municipality"]; ?>
                        </div>
                        <div class="cell" data-title="dateOfTravel">
                            <?php echo $row["dateOfTravel"]; ?>
                        </div>
                        <div class="cell" data-title="contactNumberHead">
                            <?php echo $row["contactNumberHead"]; ?>
                        </div>
                    </div>
                    ?>
                    <?php
				}
			} else {
				echo "0 results";
			}
		
	
	$countAll = $countL + $countM;
	  
	?>
                 



                </div>
            </div>
        </div>
    </div>




    <!-- Script for Table Design-->

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>