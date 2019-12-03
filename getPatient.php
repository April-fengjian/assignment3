<?php
include 'connectdb.php';
?>
<?php
//this file is used to get all the patient base on the given doctor
$doctor	= $_POST['doctor'];
$query = 'SELECT * FROM treat,patient WHERE treat.patientOHIP = patient.OHIP AND treat.doctorNum = "'.$doctor.'"';
$result = mysqli_query($connection,$query);

echo "<h3>";
echo "The doctor is treating those patients:";
echo "<br>";
echo "</h3>";
while ($row = mysqli_fetch_assoc($result)) {
	echo "<li>";
	echo $row["firstname"].' '.$row["lastname"]. "<br>";
}
echo "Are you sure you want to delete this doctor?";
?>
