<html>
<link rel="stylesheet" type="text/css" href="hospital.css">
</html>
<?php
include 'connectdb.php';
?>
<?php
//This file is used to delete the doctor
//get the value from the client input
$doctor = $_POST['doctor'];
$choice = $_POST['choice'];

//check the client's choice
//if no, do not delete the doctor
if($choice == "no"){
        echo "Cancled! The deletion is fail";
}
else{
        $delete_query = 'DELETE FROM doctor WHERE licenseNum = "'.$doctor.'"';
//	$delete_result = mysqli_query($connection,$delete_query);
	if(mysqli_query($connection,$delete_query)){
		echo "Success!";
	}else{
		die("Fail! The doctor may not exit in the list");
	}
}
mysqli_close($connection);
?>

