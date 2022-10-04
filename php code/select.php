<?php
include("config.php");
$sql = " SELECT * from personal";
$result =  $conn->query($sql);
if($result->num_rows > 0){
	echo " <table border = 1><tr><th>NAME</th><th>Roll No </th><th>Class</th><th>Email</th></tr>";
	while( $row = $result->fetch_assoc())
	{

		echo "<tr><td>".$row["name"]. "</td><td>".$row["roll_no"]."</td><td>".$row["class"]."</td><td>".$row["email"]. "</td></tr>";
	}




}

else {


	echo " no record";
}
echo "</table>";






?>