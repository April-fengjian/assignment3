<?php
include 'connectdb.php';
?>
<?php
//this file is used to find the doctor before the given date
echo "<ol>";

//get the value from the client
$d = $_POST["date"];
$query = 'SELECT * FROM doctor WHERE licensed_date < "'.$d .'"';
$result = mysqli_query($connection,$query);

//print the result
while ($row=mysqli_fetch_assoc($result)) {
	echo "<li>";
	echo 'Name: ' . $row["firstname"] .' '. $row["lastname"].'<br>';
	echo 'Specially: ' . $row["specially"] . '<br>';
	echo 'Licensed Date: ' . $row["licensed_date"] . '<br>';
	echo '<br>';
}
mysqli_free_result($result);
mysqli_close($connection);
echo "</ol>";
?>
