<?php
include 'connectdb.php';
?>
<?php

//this file is used to list the name of all the doctors
echo "<ol>";
$query = "SELECT * FROM doctor";
$result = mysqli_query($connection,$query);
while ($row = mysqli_fetch_assoc($result)) {
	echo "<li>";
        echo '<input type = "radio" name = "doctor" value = "';
        echo $row[licenseNum];
        echo '">'. $row["firstname"] .' '. $row["lastname"]. "<br>";
}
echo "</ol>";
mysqli_close($connection);
?>
