<?php
include 'connectdb.php';
?>
<?php

//this file is used to list the name of all the patients
echo "<ol>";
$query = "SELECT * FROM patient";
$result = mysqli_query($connection,$query);
while ($row = mysqli_fetch_assoc($result)) {
        echo "<li>";
        echo '<input type = "radio" name = "patient" value = "';
        echo $row[OHIP];
        echo '">'. $row["firstname"] .' '. $row["lastname"]. "<br>";
}
echo "</ol>";
mysqli_close($connection);
?>

