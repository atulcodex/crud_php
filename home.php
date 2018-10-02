<?php
	session_start();
	error_reporting(0);
	include("connection.php");
	$userprofile =$_SESSION['user_name'];
	if ($userprofile==true) 
	{
		
	}
	else
	{
		header('location:login.php');
	}
	$query="SELECT * FROM SCHOOL WHERE USERNAME='$userprofile'";
	$data = mysqli_query($conn , $query);
	$result=mysqli_fetch_assoc($data);
	echo "Welcome ".$result['name'];
?>
<br>
<p align="justify">
<img src="<?php echo $result['picsource']; ?>" width="160" height="100" align="left" />Integer viverra ultricies sapien, sollicitudin bibendum erat tincidunt non. Aliquam sodales consequat tellus nec efficitur. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque in commodo tortor, non efficitur eros. Curabitur euismod eu libero ac pharetra. Curabitur rutrum ultrices eleifend. Phasellus id tempus erat. Etiam varius scelerisque magna ut pellentesque. Phasellus bibendum mollis vulputate. Suspendisse tincidunt risus massa. Vestibulum volutpat urna rhoncus mauris lacinia, vel finibus lacus auctor. Aliquam sit amet feugiat risus. Donec maximus tellus quis velit tincidunt sollicitudin malesuada sed libero. In lobortis dui turpis, vel semper augue fermentum et. Praesent purus augue, mattis id lectus sed, volutpat porttitor libero.</p>

<p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nisl mollis, eleifend neque sit amet, fringilla turpis. Nullam elementum tincidunt nisl non mattis. Morbi a elit sapien. Nunc semper nunc ut magna mollis, sed pellentesque purus ullamcorper. Quisque malesuada, dolor tempor porttitor ullamcorper, arcu justo ultrices velit, in consectetur leo massa vel mauris. Etiam tincidunt aliquet nisl, ac luctus felis aliquet eu. Aliquam nisl justo, consectetur ut fermentum eu, lobortis eget justo. Nunc accumsan odio vel ligula volutpat pretium at ac dolor. In hendrerit orci a ex imperdiet ultrices. Praesent velit arcu, porta eleifend posuere et, dapibus a neque. Proin at vulputate massa. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam lacinia egestas turpis, bibendum consectetur libero aliquet quis. Duis in erat vitae ligula ultrices pharetra. Suspendisse vel nisl ullamcorper leo tristique aliquam.</p>
<a href="logout.php"><button>logout</button></a>