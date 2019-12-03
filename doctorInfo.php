<?php
include 'connectdb.php';
?>
<?php
echo "<ol>";

//this file is used to show all the information of the doctors

//get the value from the user input
$d = $_POST['doctor'];

//get the date from the databse
$query = 'SELECT * FROM doctor, hospital WHERE doctor.work_at = hospital.hospital_code AND doctor.licenseNum ="'. $d.'"';
$result = mysqli_query($connection,$query);

//print all the data
while ($row=mysqli_fetch_assoc($result)) { 
	
	echo 'Name: ' . $row["firstname"] .' '. $row["lastname"] . '<br>';
	echo 'License Number: ' . $row["licenseNum"] . '<br>';
	echo 'Licensed Date: ' . $row["licensed_date"] . '<br>';
	echo 'Specially: ' . $row["specially"] . '<br>';
	echo 'Work At: ' . $row["name"] . '<br>';
	
}
mysqli_free_result($result);
mysqli_close($connection);

echo "</ol>";
?>
