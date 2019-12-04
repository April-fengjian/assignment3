<html>
<link rel="stylesheet" type="text/css" href="hospital.css">
</html>
<?php
include 'connectdb.php';
?>
<form action = "deleteDoctor.php" method = "post">
<?php
//this file used to show the associate patients of the given doctor,and ask client if they change their mind

//get the value from the client input
$doctor = $_POST['doctor'];

//get the associate patients name base on the client's choice
$query = 'SELECT * FROM treat,patient WHERE treat.patientOHIP = patient.OHIP AND treat.doctorNum = "'.$doctor.'"';
$result = mysqli_query($connection,$query);
echo "<h3>";
echo "The doctor is treating those patients:";
echo "<br>";
echo "</h3>";

echo "Are you sure to delete this doctor?";
while ($row = mysqli_fetch_assoc($result)) {
        echo "<li>";
        echo $row["firstname"].' '.$row["lastname"]. "<br>";
}
$doctor_query = 'SELECT * FROM doctor WHERE licenseNum = "'.$doctor.'"';
$doctor_result = mysqli_query($connection,$doctor_query);
while ($row = mysqli_fetch_assoc($doctor_result)) {
        echo "<li>";
        echo '<input type = "radio" name = "doctor" value = "';
        echo $row[licenseNum];
        echo '">'. $row["firstname"] .' '. $row["lastname"]. "<br>";
}

mysqli_close($connection);
?>
</form>
<html>
<!-- Ask client if he/she change their mind -->

<form action="deleteDoctor.php" method="post">
      	<input type = "radio" name = "choice" value = "yes">Yes
        <input type = "radio" name = "choice" value = "no">No
<input type = "submit" value = "submit">
</form>
</html>
