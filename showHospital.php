<?php
include 'connectdb.php';
?>
<?php
//this file is uesd to list the name of all the hospital
$query = 'SELECT * FROM hospital';
$result = mysqli_query($connection,$query);
while ($row = mysqli_fetch_assoc($result)) {
	echo "<li>";
        echo '<input type = "radio" name = "oldName" value = "';
        echo $row["hospital_code"];
        echo '">'. $row["name"] . "<br>";
}
mysqli_close($connection);
?>
