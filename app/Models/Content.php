<?php 

	$namahost = "localhost";
	$username = "root";
	$password = "";
	$database = "xxx";

	mysqli_conntect($namahost,$username,$password) or die("Failed");

	mysqli_select_db ($database) or die("database not exist");

 ?>