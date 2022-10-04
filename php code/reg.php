<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bscs";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){

	die("connection failed".$conn->connect_error );
}
$name = "";
$gender = "";
$skill = "";
$country = "";

if(isset($_POST['submit'])){

$name = $_POST['name'];
$gender = $_POST['gender'];
$skill = implode(',', $_POST['skill']);
$country = $_POST['country'];

}



$sql = "INSERT INTO form(name, gender, skill, country) VALUES ('$name', '$gender', '$skill', '$country')";
if($conn->query($sql)=== TRUE)
{
	echo " record inserted";

}
else
{
	echo " Error".$conn->error;
}


?>