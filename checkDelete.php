<?php
include 'connectdb.php';
?>
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
while ($row = mysqli_fetch_assoc($result)) {
        echo "<li>";
        echo $row["firstname"].' '.$row["lastname"]. "<br>";
}
mysqli_close($connection);
?>
<html>
<!-- Ask client if he/she change their mind -->
<h3>Are you sure to delete this doctor? </h3>
<form action="deleteDoctor.php" method="post">
        <input type = "submit" name = "choice" value = "yes">Yes
        <input type = "submit" name = "choice" value = "no">No
</form>
</html>
