<?php
	session_start();
	include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
	<div class="loginbox">
		<img src="qazi.jpg" class="avatar">

		<h1>Login Here</h1>
		<form action="login.php" method="post">
			<p>Username</p>
			<input type="text" name="username" placeholder="Username" value=""/>

			<p>Password</p>
			<input type="password" name="password" placeholder="password" value=""/>

			<input type="submit" name="submit" value="login"/>

			<br>
			<a href="#">Lost your password?</a>
			<br>
			<a href="#">Don't have an account?</a>
		</form>
	</div>
</body>
</html>
<?php
	if (isset($_POST['submit'])) 
	{
		$user=$_POST['username'];
		$pwd=$_POST['password'];

		$query="SELECT * FROM SCHOOL WHERE USERNAME='$user' && PASSWORD='$pwd'";
		$data = mysqli_query($conn , $query);
		$total = mysqli_num_rows($data);

		if ($total==1) 
		{
			$_SESSION['user_name']=$user;
			header('location:home.php');
		}
		else
		{
			echo "login failed";
		}
	}
?>