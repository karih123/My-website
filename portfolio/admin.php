<?php
	require("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<title>Login Form</title>
		<link rel="stylesheet" type="text/css" href="admin.css">
		<link rel = "shortcut icon" type="image/x-icon" href="images/favicon.ico" />
</head>
<body>
  <div class="formC">
    <h2 class="title">
  				Admin Login
   	</h2>
   	<form method="POST">
   			<label>User Name</label>
   			<input type="name" name="AdminName" />
   			<label>Password</label>
   			<input type="password" name="AdminPassword"/>
   			<button name="Signin">Login</button>
   	</form>
   
  </div>

  <?php 

  		 if(isset($_POST['Signin']))
  		 {
  		 	$query="SELECT * FROM `admin_login` WHERE `Admin_Name`='$_POST[AdminName]' AND `Admin_Password`='$_POST[AdminPassword]'";
  		 	$result=mysqli_query($conn,$query);
  		 	if(mysqli_num_rows($result)==1)
  		 	{
  		 		session_start();
  		 		$_SESSION['AdminLoginId']=$_POST['AdminName'];
  		 		header("location: Admin_Panel.php");
  		 	}
  		 	else{
  		 		echo"<script>alert('Incorrect Password')</script>";
  		 	}
  		 }
  ?>
</body>
</html>