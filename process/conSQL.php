<?php
	$dbUrl = "localhost";
	$dbUser = "root";
	$dbPass = "";
	$dbName = "penentuanpkl";

	$con = mysqli_connect($dbUrl,$dbUser,$dbPass,$dbName);

	#check username dan password di database
	if(!$con) {
        die("Connection failed : " .mysqli_connect_error());
    }
?>