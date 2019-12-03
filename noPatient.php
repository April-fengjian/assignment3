<?php
include 'connectdb.php';
?>
<?php
// this file is used to find all the doctor that have no patient to treat
$query = "SELECT * FROM doctor WHERE licenseNum NOT IN (SELECT doctorNum FROM treat)";
$result = mysqli_query($connection,$query);

while ($row=mysqli_fetch_assoc($result)) {
	echo 'Name: ' . $row[firstname] .' '. $row["lastname"] . '<br>';

}
mysqli_close($connection);
?>
