<html>
	<title>User registration</title>
	<head>
	<link rel="stylesheet" href="style/style.css" type="text/css" media="screen" /> 
	</head>
<?php
	include('registerprocess.php');
$conn=mysqli_connect("localhost","root","","") or die(mysql_error($conn));
$db=mysqli_query($conn,"create database if not exists users") or die(mysqli_error($conn));
$use=mysqli_query($conn,"use users")or die(mysqli_error($conn));
$table=mysqli_query($conn,"create table if not exists user (userid INT(255) AUTO_INCREMENT PRIMARY KEY, firstname varchar(255) not null,lastname varchar(255) not null,username varchar(255) not null,password varchar(255) not null)") or die(mysqli_error($conn));

?>
	<div class="form">
		<fieldset class="field">
<form action="" method="post">
	<div class="fi">
	<p class="regd"><b>Register here</b></p>
<p>Enter your First name</p>
	<input type="text" name="first" required>
<p>Enter your Last name</p>
	<input type="text" name="last" required>

<p>Enter your User name</p>
	<input type="text" name="user" required>

<p>Enter your Password</p>
	<input type="password" name="pass" required>

<p><input type="submit" name="sub" value="Register"></p>
		<br>
	<a href="login.php" class="reg">Already registered? click to here login</a>
</div>




</form>
			</fieldset>
		</div>
	</html>