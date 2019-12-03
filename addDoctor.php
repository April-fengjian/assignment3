<?php
include 'connectdb.php';
?>
<?php
echo "<ol>";

//get the value from the client input
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$num = $_POST["lnum"];
$date = $_POST["date"];
$specially = $_POST["special"];
$hospital = $_POST["hospital"];

//insert the data
$query = 'INSERT INTO doctor(firstname,lastname,licenseNum,licensed_date,specially,work_at) VALUES ("' .$fname. '","' .$lname. '","' .$num. '","' .$date. '","' .$specially. '","' .$hospital. '")';

//check if the data is insert successfully
if(!mysqli_query($connection,$query)){
        die("Fail! Please check the input information" . mysqli_error($connection));
        mysqli_free_reslut($result);
}
echo "Success!";
mysqli_close($connection);
echo "</ol>";
?>
