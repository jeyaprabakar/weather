<?php session_start(); 

if(isset($_POST['Submit']))
{
$logins = array('Admin' => '1234');

$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

if (isset($logins[$username]) && $logins[$username] == $password)
{
$_SESSION['UserData']['username']=$logins[$username];
header("location:weather.php");
exit;
}
else{

$msg="<span style='color:red'>Invalid Login Details</span>";
}
}

?>



<html>
	<head>
		<title>My program</title>
		<link rel="stylesheet" a href="style.css">
	</head>
	
	<body>
		
				<div class="bg-img">
				
				<div class="container">
				
								<form action="" method="POST" name="loginform> 
								<h1>Weather Login</h1> <br>

								<label for="user"><b>Username</b></label>
								<input type="text"  name="username" placeholder="Enter Username" required>

								<label for="password"><b>Password</b></label>
								<input type="password" name="password" placeholder="Enter Password"required>

								<button type="submit" class="btn" name="Submit" value= "login">Login</button> <br><br>
								<button type="reset" class="btn" value= "Cancel">Cancel</button>
								
								</form>
								
								
						
</div>						
				</div>

	</body>
</html>	

