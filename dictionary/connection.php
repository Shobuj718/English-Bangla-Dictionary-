<?php
	$servername = "localhost";
	$username   = "root";
	$password   = "";
	$dbname     = "word_db";

	//Create connection 
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	//Check connection 
	if(!$conn){
		die("Connectin failed : " . mysqli_connect_error());
	}


?>