<?php
include 'connectdb.php';
?>
<?php
//this file is let the client give the information of the new doctor
echo "<ol>";
$query = "SELECT * FROM hospital";
$result = mysqli_query($connection,$query);

echo 'First Name: '. '<input type = "text" name = "fname">' . '<br>';
echo 'Last Name: ' . '<input type = "text" name = "lname">' . '<br>';
echo 'License Number: ' . '<input type = "text" name = "lnum">' . '<br>'; 
echo 'Licensed Date: ' . '<input type = "text" name = "date">' . '<br>';
echo 'Specially: ' . '<input type = "text" name = "special">' . '<br>';
echo 'Work at: ';
echo '<select name = "hospital">'; 

while ($row = mysqli_fetch_assoc($result)) {
	echo "<li>";
	echo "<option value = '$row[hospital_code]'>$row[name]</option>";
}
echo '</select>';
echo "</ol>";
mysqli_close($connection);
?>
