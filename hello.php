<?php

	include("connection.php");
	$query = "INSERT INTO SCHOOL VALUES ('5','abhshek lal','Bsc.it')";

	$data=mysqli_query($conn, $query);

	if ($data) 
	{
		echo "Data inserted into database";
	}
?> 