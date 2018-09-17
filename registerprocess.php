<?php
include('connect_db.php');
if(isset($_POST['sub'])){
$fn=$_POST['first'];
$ln=$_POST['last'];
$user=$_POST['user'];	
$pass=$_POST['pass'];	
if($fn!='' && $ln!='' && $user!='' && $pass!=''){
	$queryinsert=mysqli_query($conn,"insert into user(firstname,lastname,username,password) values('$fn','$ln','$user','$pass')") or die(mysqli_error($conn));
	if($queryinsert){
		
		    echo '<script type="text/javascript">'; 
echo 'alert("you have successifully registered. You can now log-in ");'; 
echo 'window.location.href = "login.php";';
echo '</script>';
	}
	else{
			    echo '<script type="text/javascript">'; 
echo 'alert("Registration process failed!!! Please try again ");'; 
echo 'window.location.href = "register.php";';
echo '</script>';
	}
	
	
	
}
   echo '<script type="text/javascript">'; 
echo 'alert("Registration process failed!!! Please provide the details as required ");'; 
echo 'window.location.href = "register.php";';
echo '</script>';	
	
	
	
	
	
}








?>