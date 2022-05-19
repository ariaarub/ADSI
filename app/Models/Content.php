<?php 

	$namahost = "localhost";
	$username = "root";
	$password = "";
	$database = "xxx";

	mysqli_connect($namahost,$username,$password) or die("Failed");

	mysqli_select_db ($database) or die("database not exist");

 ?>