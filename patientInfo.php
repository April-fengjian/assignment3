<?php
include 'connectdb.php';
?>
<?php
//this file is used to get the information of the patient base on the given OHIP number

//get the value from the client and find the associate data
$OHIP = $_POST['OHIP'];

//get the data of the doctor who is treat that patient
$doctor_query = 'SELECT * FROM doctor, treat WHERE doctor.licenseNum = treat.doctorNum AND treat.patientOHIP = "'.$OHIP.'"';
$doctor_result = mysqli_query($connection,$doctor_query);

//get the name of the patient base on the OHIP number
$query = 'SELECT DISTINCT firstname,lastname FROM patient, treat WHERE patient.OHIP = treat.patientOHIP AND patient.OHIP = "'.$OHIP.'"';
$result = mysqli_query($connection,$query);

//check if the input information is correct
if(mysqli_num_rows($result)==0){
	die("Fail! Please check the OHIP");
	mysqli_free_reslut($result);
}

//if the given information is correct, print the patient's name and doctor's name who treat that patient
while ($row=mysqli_fetch_assoc($result)) {
	echo 'Patient name: ' . $row["firstname"] .' '. $row["lastname"] . '<br>';
}
echo '<br>';
echo 'Treated by: ';
while ($row=mysqli_fetch_assoc($doctor_result)) {
	echo $row["firstname"] .' '. $row["lastname"] . ', ';
}
mysqli_close($connection);
?>
