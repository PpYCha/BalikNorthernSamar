<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/favicon/nsamarLogo.ico">

    <title>Northern Samar LSI</title>


    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- JS -->
    <script src="assets/js/jquery-3.1.1.min.js" > </script>

<script>
    $(function(){
  $("#header").load("header.html"); 
  $("#footer").load("footer.html"); 
});
</script> 

</head>

<!-- START of PHP CODE -->
<?php 


include 'dbConfig.php';
$AP_ID = $_GET['id'];
$sql = "SELECT 
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
FROM applicants WHERE AP_ID ='". $AP_ID . "'" ;
if($result = mysqli_query($mysqli, $sql)){
if (mysqli_num_rows($result) > 0) {
while ($row = mysqli_fetch_array($result)) {
?>
<!-- End of PHP CODE -->

<body>

<header id ="header"> </header>

    <main role="main">
        <section class="jumbotron text-center">
            <div class="container">
                <img src="assets/img/favicon/nsamarLogo.ico" alt="">
                <h1 class="jumbotron-heading">Northern Samar Local Stranded Application Page</h1>
            </div>
        </section>
        <div class="section section-md">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-12">

                        <div class="card shadow-soft border p-2 mb-2">
                            <section>
                                <div class="sectionTitle">
                                    <h1>Travel Pass/Authority</h1>
                                </div>
                                <div class="sectionContent">
                                    <?php
                                         $filename = $row['travelpass_path'];
                                         echo "<img style='width:100%;height:100%;' src='assets/img/uploaded_travelPass/$filename'";
                                    ?>
                                </div>
                                <div class="clear"></div>
                            </section>
                        </div>

                        <div class="card shadow-soft border p-2 mb-2">
                            <section>
                                <div class="sectionTitle">
                                    <h1>Personal Details</h1>
                                </div>
                                <div class="sectionContent">
                                    <h6>Name
                                        <?php echo $row['firstName'] . " " . $row["middleName"] . " " . $row["lastName"]; ?>
                                    </h6>
                                    <h6>Date of Birth: <?php echo $row['dateOfBirth']; ?></h6>
                                    <h6>Cevil Status: <?php echo $row['civilStatus']; ?></h6>
                                    <h6>Present Address: <?php echo $row['presentCompleteAddress']; ?></h6>
                                    <h6>Contact #: <?php echo $row['contactNumberHead']; ?></h6>
                                    <h6>Email Address: <?php echo $row['emailHead']; ?></h6>
                                    <h6>Alternative Contact #: <?php echo $row['altContactNumberHead']; ?></h6>
                                    <h6>Alternative Emaill Address: <?php echo $row['altEmailHead']; ?></h6>
                                </div>
                                <div class="clear"></div>
                            </section>
                        </div>

                        <div class="card shadow-soft border p-2 mb-2">
                            <section>
                                <div class="sectionTitle">
                                    <h1>Travel Details</h1>
                                </div>
                                <div class="sectionContent">
                                    <h4>ORIGIN</h4>
                                    <h6>Place of Origin: <?php echo $row['pointOfOrigin']; ?></h6>
                                    <h6>Date of Travel: <?php echo $row['dateOfTravel']; ?></h6>
                                    <h4>DESTINATION</h4>
                                    <h6>Province: <?php echo $row['province']; ?></h6>
                                    <h6>Munipality: <?php echo $row['municipality']; ?></h6>
                                    <h6>Vehicle to be used: <?php echo $row['vehicleToBeUsed']; ?></h6>
                                </div>
                                <div class="clear"></div>
                            </section>
                        </div>


                        <div class="card shadow-soft border p-2 mb-2">
                            <section>
                                <div class="sectionTitle">
                                    <h1>Members</h1>
                                </div>
                                <div class="sectionContent">
                                    <table id="tblApplicants"
                                        class="table table-striped table-bordered table-hover break-text"
                                        style="table-layout: fixed;">
                                        <thead class="black white-text">
                                            <tr>
                                                <th onclick="sortTable(0)" scope="col" style='display:none;'>ID</th>
                                                <th onclick="sortTable(1)" scope="col">Names</th>
                                                <th onclick="sortTable(2)" scope="col">Contact #</th>
                                                <th onclick="sortTable(3)" scope="col">Destination LGU</th>
                                            </tr>
                                        </thead>
                                        <tbody id="myTable">

                                            <?php 
                                            
                                            $sql = "SELECT T1.AP_ID, T1.Name, T1.memContactNumber, T1.memAddr FROM members AS T1, applicants AS T2   WHERE T1.AP_ID = T2.AP_ID && T1.AP_ID = '" . $AP_ID    ."' ORDER BY municipality ASC, firstName ASC";

                                            $result = $mysqli->query($sql);
                                            $countM = 0;
                                            if ($result->num_rows > 0) {
                                        
                                                // output data of each row
                                                while ($row = $result->fetch_assoc()) {
                                                    $countM++;
                                                    echo "<tr>";
                                                    echo "<td style='display:none;'>" . $row["AP_ID"]  .  "</td>";
                                                    $test = $row['Name'];
                                                    echo "<td>" . $row["Name"]  . "</td>";
                                                    echo "<td>" . $row["memContactNumber"]  . "</</td>";
                                                    echo "<td>" . $row["memAddr"]  . "</</td>";
                                                    echo '</tr>';
                                                }
                                        
                                        
                                                       
                                                    } else {
                                                       
                                                    }
                                                
                                            
                            
                                            
                                            ?>

                                        </tbody>
                                    </table>

                                </div>
                                <div class="clear"></div>
                            </section>
                        </div>

                    </div>
                </div>
            </div>
    </main>

    <footer id="footer" class="text-muted">
        
    </footer>

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery-3.1.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

</body>

<!-- START of PHP CODE -->
<?php
 
}
mysqli_free_result($result);
} else{
echo "No records matching your query were found.";
}
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
}

// Close connection
mysqli_close($mysqli);
?>
<!-- End of PHP CODE -->

</html>