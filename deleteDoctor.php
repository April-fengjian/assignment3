<?php
include 'connectdb.php';
?>
<?php
//This file is used to delete the doctor
//get the value from the client input
$doctor = $_POST['doctor'];
$choice = $_POST['choice'];

//check if the doctor is exist in the list
$query = 'SELECT * FROM treat,patient WHERE treat.patientOHIP = patient.OHIP AND treat.doctorNum = "'.$doctor.'"';
$result = mysqli_query($connection,$query);
if(!$result){
	echo "ERROR";
}

//check the client's choice
//if no, do not delete the doctor
if($choice == "no"){
        echo "Cancled! The deletion is fail";
}
else if($choice == "yes"){
        $delete_query = 'DELETE FROM doctor WHERE licenseNum = "'.$doctor.'"';
	$delete_result = mysqli_query($connection,$delete_query);
	if($delete_result){
		echo "Success!";
	}else{
		echo"Fail! The doctor may not exit in the list";
	}
}
mysqli_close($connection);
?>

