<?php
session_start();
include('connect_db.php');

if(isset($_POST['login'])){
$user=$_POST['user'];
$pass=$_POST['pass'];
if($user!='' && $pass!=''){
$querylogin=mysqli_query($conn,"select * from user where username='$user' and password='$pass'") or die(mysqli_error($conn));
	$row=mysqli_num_rows($querylogin);
	if($row>0){
		$data=mysqli_fetch_array($querylogin);
		$_SESSION['id']=$data['userid'];	
		header('location:userportal.php');	
			
		
	}
	    echo '<script type="text/javascript">'; 
echo 'alert("wrong username or password");'; 

echo '</script>';
	
	
	
	
	
}
	
echo '<script type="text/javascript">'; 
echo 'alert(" Please provide the credentials as required ");'; 
echo 'window.location.href = "register.php";';
echo '</script>';		
	
	
	
	
	
	
}





?>