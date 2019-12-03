<?php
include 'connectdb.php';
?>
<form action = "doctorInfo.php" method = "post">
<?php
//the file is used to get all the doctor from the database
echo "<ol>";

//get the value from client input
$s = $_POST['sort'];
$o = $_POST['order'];

//the showing method base on the client input
if($s == "first name"){
	if($o = "ascending"){
		$query = "SELECT * FROM doctor ORDER BY firstname asc";
		$result = mysqli_query($connection,$query);
	}
	if($o = "descending"){
                $query = "SELECT * FROM doctor ORDER BY firstname desc";
                $result = mysqli_query($connection,$query);
	}
	else{
		$query = "SELECT * FROM doctor ORDER BY firstname";
                $result = mysqli_query($connection,$query);
	}
	while ($row = mysqli_fetch_assoc($result)) {
                echo "<li>";
                echo '<input type = "radio" name = "doctor" value = "';
		echo $row[licenseNum];
		echo '">'. $row["firstname"] .' '. $row["lastname"]. "<br>";
	}
	echo '<input type = "submit" value = "show detail of this doctor">';
	mysqli_free_result($result);
}
else if($s == "last name"){
	if($o = "ascending"){
	        $query = "SELECT * FROM doctor ORDER BY lastname asc";
                $result = mysqli_query($connection,$query);
        }
	if($o = "descending"){
                $query = "SELECT * FROM doctor ORDER BY lastname desc";
                $result = mysqli_query($connection,$query);
        }
	else{
             	$query = "SELECT * FROM doctor ORDER BY lastname";
                $result = mysqli_query($connection,$query);
        }
	while ($row = mysqli_fetch_assoc($result)) {
                echo "<li>";
                echo '<input type = "radio" name = "doctor" value = "';
                echo $row[licenseNum];
		echo '">'. $row["firstname"] .' '. $row["lastname"]. "<br>";
        }
	echo '<input type = "submit" value = "show detail of this doctor">';
	mysqli_free_result($result);
}
echo "</ol>";
mysqli_close($connection);
?>
</form>
