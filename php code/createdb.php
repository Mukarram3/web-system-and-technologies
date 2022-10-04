<?php
$servername = "localhost";
$username = "root";
$password = "";


$conn = new mysqli($servername, $username, $password);
if($conn->connect_error){

	die("connection failed".$conn->connect_error );
}

$sql = "CREATE DATABASE animal";
if($conn->query($sql)=== TRUE)
{
	echo " animal database created successfully";

}
else
{
	echo " Error".$conn->error;
}


?>