<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bscs";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){

	die("connection failed".$conn->connect_error );
}

$sql = "INSERT INTO personal(name, roll_no, class, email) VALUES ('Rafia', '03', 'BSCS', 'NOMAN@YMAIL.COM')";
if($conn->query($sql)=== TRUE)
{
	echo " record inserted";

}
else
{
	echo " Error".$conn->error;
}


?>