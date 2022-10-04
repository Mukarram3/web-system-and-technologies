<!DOCTYPE HTML>  
<head>
<?php
include("config.php");
$upname = "";
$name = "";
$gender = "";
$skill = "";
$country = "";
if(isset($_POST['update'])) {
$upname = $_POST['upname'];

$sql = "SELECT name, gender, skill, country FROM form WHERE name = '$upname'";

$result =  $conn->query($sql);
if($result->num_rows > 0){
  
  while( $row = $result->fetch_assoc())
  {

     $name = $row["name"];
     $gender = $row["gender"];
     $skill = explode(',', $row["skill"]);
    $country = $row["country"];
    
  }

}

else {


  echo " no record";
}
}

?>
</head>
<body>  
<h2>PHP Form Insertion  Example</h2>
<form method="post" action="">  
  Enter Name: <input type="text" name="upname"> <input type = "submit" value = "get data" name = "update"> <br><br><br>
  Name: <input type="text" name="name" value="<?php echo $name;?> "> 
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female"  <?php if($gender == 'female') echo 'checked = "checked"' ?>>Female
  <input type="radio" name="gender" value="male"<?php if($gender == 'male') echo 'checked = "checked"' ?>>Male
  <br><br>
	Skill<input type = "checkbox" name = "skill[]" value = "MS-Office" <?php if(in_array("MS-Office", $skill)) echo 'checked = "checked"'?>> MS-OFFICE <br>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type = "checkbox" name = "skill[]" value = "MS-Excel" <?php if(in_array("MS-Excel", $skill)) echo 'checked = "checked"'?>> MS-Excel <br>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type = "checkbox" name = "skill[]" value = "MS-Power" <?php if(in_array("MS-Power", $skill)) echo 'checked = "checked"'?>> MS-power <br>
<br>
country: <select name = "country">

<option   <?php if($country == 'Pakistan') echo 'selected = "selected"' ?>> Pakistan </option>
<option <?php if($country == 'Iran') echo 'selected = "selected"' ?>> Iran </option>
<option <?php if($country == 'turky') echo 'selected = "selected"' ?>> turky </option>
<option <?php if($country == 'china') echo 'selected = "selected"' ?>> china </option>
</select>
<br>
 <br>
  <input type="submit" name="submit" value="update"> 
</form>
</body>
</html>