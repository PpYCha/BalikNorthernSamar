<?php
session_start();
$message="";
if(count($_POST)>0) {
  $con = mysqli_connect('localhost','root','','nsrrrdb') or die('Unable To connect');
 //$con = mysqli_connect('localhost','id13939868_database_ine','xf$GXL+j}>4z0<9o','id13939868_nsrrrdb') or die('Unable To connect');
$result = mysqli_query($con,"SELECT * FROM login_user WHERE user_name='" . $_POST["usr"] . "' and password = '". $_POST["psw"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["id"] = $row['id'];
$_SESSION["name"] = $row['name'];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["id"])) {
header("Location:rpt_daily.php");
}
?>

<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>CodePen - Login </title>

  <link rel="stylesheet" href="css/reset.css">

    <link rel="stylesheet" href="assets/css/style_login.css" media="screen" type="text/css" />

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="assets/js/jquery-3.1.1.min.js" > </script>

    <script> 

$(function(){
  $("#header").load("header.html"); 
  $("#footer").load("footer.html"); 
});
</script> 
</head>


<body>
<header id ="header">
      
      </header>
  <div class="wrap">
      <form  name="myForm" action="" method="post" autocomplete="off">
          <div class="avatar">
              <img src="assets/img/favicon/nsamarLogo.ico">
            </div>
            <input name="usr" type="text" placeholder="username" required>
            <div class="bar">
                
                <i></i>
            </div>
            <input name="psw" type="password" placeholder="password" required>
            <a href="" class="forgot_link">forgot ?</a>
            <button type="submit">Sign in</button>
        </form>
	</div>

  <footer>

</footer>

</body>


</html>