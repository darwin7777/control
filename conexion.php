<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "control";

/*$username = "adminControl";
$password = "JdVg+1985--$$";*/


$conn = new mysqli($servername, $username, $password, $database);
	
	if($conn->connect_errno)
	{
		echo "No hay conexión: (" . $conn->connect_errno . ") " . $conn->connect_error;
	}
?>
