<html>
<link rel="stylesheet" type="text/css" href="hospital.css">
</html>
<?php
include 'connectdb.php';
?>
<?php
//This file is used to change the name of the hospital
//get the value from the client input
$code = $_POST['oldName'];
$newName = $_POST['newName'];

//update the data base on the input value
$query = 'UPDATE hospital SET name = "'.$newName.'" WHERE hospital_code = "'.$code.'"';
$result = mysqli_query($connection,$query);
if($result){
	echo "Successed!";
}
mysqli_close($connection);
?>
