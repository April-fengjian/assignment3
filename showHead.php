<?php
include 'connectdb.php';
?>
<?php

//this file is used to list the head doctor's name and date become head of all the hospital
$query = 'SELECT * FROM hospital,doctor WHERE hospital.headNum = doctor.licenseNum ORDER BY hospital.name';
$result = mysqli_query($connection,$query);
while ($row = mysqli_fetch_assoc($result)) {
        echo 'Hospital Name: ' . $row["name"] . '<br>';
	echo 'Head of Hospital: ' . $row["firstname"] . $row["lastname"] . '<br>';
	echo 'Start Date: ' . $row["begin_date"] . '<br>';
	echo '<br>';
}
mysqli_close($connection);
?>
