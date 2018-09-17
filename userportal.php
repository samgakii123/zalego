<html>

	<title>User portal</title>
	<head>
	<link rel="stylesheet" href="style/style.css" type="text/css" media="screen" /> 
	</head>
	<?php
include('loginprocess.php');
	$queryfetchs=mysqli_query($conn,"select * from user where userid='".$_SESSION['id']."'") or die(mysqli_error($conn));
		while($rows=mysqli_fetch_array($queryfetchs)){
		$fname=$rows['firstname'];
			$user=$rows['username'];
			$ln=$rows['lastname'];
		
			
		}
	

?>
<form>
<fieldset class="portal">
	<a href="login.php" class="log">Logout</a>
<p class="wel"><u>Welcome to the user portal</u></p>
	
	
	<div class="det">
<p>Your First name is:<b><?php echo $fname; ?></b></p>
<p>Your Last name is:<b><?php echo $ln; ?></b></p>	
	</div>
	
	
	
	
	
	</fieldset>	
	
	
	
	
	
	
	
	</form>







</html>