<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>CodePen - Login </title>

  <link rel="stylesheet" href="css/reset.css">

    <link rel="stylesheet" href="assets/css/style_login.css" media="screen" type="text/css" />

</head>


<body>

  <div class="wrap">
      <form  name="myForm" action="rpt_Daily.php" onsubmit="return validateForm()" method="post" autocomplete="off">
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

 

</body>

<?php 

echo'
<script>
    function validateForm() {
      var x = document.forms["myForm"]["usr"].value;
      var y = document.forms["myForm"]["psw"].value;
  if (x != "admin" || y != "admin") {
    alert("INVALID USER");
    return false;
  }
  else{

  }
}
</script>';
?>

</html>