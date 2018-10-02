<?php
	error_reporting(0);
	session_start();

	$_SESSION["username"]="Atul K. Prajapati";
	$_SESSION["class"]="MCA";

	echo $_SESSION["username"];

	session_unset();
?>