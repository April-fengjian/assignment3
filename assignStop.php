<html>
<link rel="stylesheet" type="text/css" href="hospital.css">
</html>
<?php
include 'connectdb.php';
?>
<?php

//get the value from cilent input
$doctorNum = $_POST['doctor'];
$patientOHIP = $_POST['patient'];
$choice = $_POST['choice'];

//if the client choose assign
if($chocie == "Assign"){
	$query = 'INSERT INTO treat(patientOHIP,doctorNum) VALUES ("'.$patientOHIP.'","'.$doctorNum.'")';
	$result = mysqli_query($connection,$query);
	if(mysqli_affected_rows($result)==0){
		die("Fail!Please check your choice");
		mysqli_free_reslut($result);
	}
	echo "Success";
}
//if the client choose stop
if($choice == "Stop"){
	$query = 'DELETE FROM treat WHERE patientOHIP = "'.$patientOHIP.'" AND doctorNum = "'.$doctorNum.'"';
	$result = mysqli_query($connection,$query);
	if(mysqli_num_rows($result)==0){
                die("Fail!Please check your choice". mysqli_error($connection));
        	mysqli_free_reslut($result);        
	}
	echo "Success";
}
mysqli_close($connection);
?>
