<?php

include 'dbConfig.php';

// File upload path travel pass
$targetDir = "assets/img/uploaded_travelPass/";
$temp = explode(".", $_FILES["groupTravelPass"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);  
$targetFilePath = $targetDir . $newfilename;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);


// File upload path group leader pic
$targetDir2 = "assets/img/uploaded_picRegistrant/";
$temp2 = explode(".", $_FILES["groupLeaderPic"]["name"]);
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

$memberFName = $_POST['memberFName'];
$memberContactNum = $_POST['memberContactNum'];
$memberAddrs = $_POST['memberAddrs'];


try {



  if (isset($_POST["submit"]) && !empty($_FILES["groupTravelPass"]["name"])) {
// Allow certain file formats
    $allowTypes = array('jpg','png','jpeg');
    if (in_array($fileType, $allowTypes)) {
// Upload file to server

      if (move_uploaded_file($_FILES["groupTravelPass"]["tmp_name"], $targetFilePath) && move_uploaded_file($_FILES["groupLeaderPic"]["tmp_name"], $targetFilePath2)) {
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



        $path = "assets/img/uploaded_picRegistrant/";
        

        $id = mysqli_insert_id($mysqli);

//echo $id;
        $i = 0;
        $j = 0;
        $h = 0;
        $k = 0;

        foreach($_FILES['memberPic']['tmp_name'] as $key => $tmp_name)
        {
          
                            // echo "===".$key.$_FILES['documents']['name'][$key]; exit;
                
                $file_name = $key.$_FILES['memberPic']['name'][$key];
                $file_size =$_FILES['memberPic']['size'][$key];
                $file_tmp =$_FILES['memberPic']['tmp_name'][$key];
                $file_type=$_FILES['memberPic']['type'][$key];  
                $target_file = $path . basename($_FILES["memberPic"]["name"][$key]);
              
              
 
                        // ADVANCED OPTIONS - Allow certain file formats
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" ) {
                    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed: $file_name<br>";
                continue;
                }

                $newfilename3 = round(microtime(true)) . "." . $imageFileType;  
          
               
                move_uploaded_file($newfilename3,$target_file);
                        // if (strlen($memberFName[$i]) != 0 && strlen($memberContactNum[$i]) != 0  && strlen($memberAddrs[$i]) != 0) {
                
                $mysqli->query(
                    "INSERT INTO `members` (`m_ID`, `Name`, `memContactNumber`, `memAddr`, `AP_ID`, `memProfilePic_path`) VALUES (NULL, '$memberFName[$i]', '$memberContactNum[$j]', '$memberAddrs[$k]', '$id', '$newfilename3')"
                 );

                $i++;
                $j++;
                $h++;
                $k++;
        
      
        
                     // }
        }
      
      
    }
    $mysqli->close();
    header('Location:success_page.html');
  }
}
}
catch (Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), "\n";
}

?>