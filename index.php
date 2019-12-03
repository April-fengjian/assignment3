<html>
<head>
<meta charset="utf-8">
<title>My Hospital</title>
<link rel="stylesheet" type="text/css" href="hospital.css">
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Welcome to My Hospital</h1>
<!---------display all the doctors---------->
<h2>Choose a method to display all the doctors: </h2>
</form>
<form action = "getDoctor.php" method = "post">
        sort by first name<input type = "radio" name = "sort" value = "first name">
        sort by last name<input type = "radio" name = "sort" value = "last name">
	<br>
	sort by ascending order<input type = "radio" name = "order" value = "ascending">
	sort by descending order<input type = "radio" name = "order" value = "descending">
<br>
<input type = "submit" value = "show">
</form>

<form action = "doctorInfo.php" method = "post">
<?php
include 'getDoctor.php';
?>
</form>

<!---------find all the doctors brfore a given date ---------->

<h2>Find all the doctors who were licensed before a date: </h2>
<form action = "licensedDate.php", method = "post">
	Enter a date(yyyy-mm-dd) <input type = "text" name = "date"> 
<input type = "submit" value = "find">
</form>
<?php
include 'licensedDate.php';
?>

<!---------add doctor ---------->
<h2>Add doctor to the list: </h2>
<form action = "addDoctor.php", method = "post">
<?php
   include 'inputData.php';
?>
<input type = "submit" value = "press to add">
</form>

<!---------delete doctor ---------->
<h2>Delete a doctor: </h2>
<form action = "checkDelete.php", method = "post">
<?php
   include 'showdoctors.php';
?>
<input type = "submit" value = "press to delete">
</form>

<!---------update hospital name ---------->
<h2>Update Hospital's Name: </h2>
<form action = "changeHname.php", method = "post">
<?php
   include 'showHospital.php';
?>	
New name of the hospital:<input type = "text" name = "newName">
<input type = "submit" value = "press to update">
</form>

<!---------display head doctor ---------->
<h2>Head of Hospital: </h2>
<?php
   include 'showHead.php';
?>

<!---------get patient data ---------->
<h2>Patient Information: </h2>
<form action = "patientInfo.php", method = "post">
Find a patient by the OHIP number: <input type = "text" name = "OHIP">
<input type = "submit" value = "press to find">
</form>

<h2>Doctor has no patient: </h2>
<?php
   include 'noPatient.php';
?>

<!---------assign or stop ---------->
<h2>Assign or Stop a doctor to treat a patient: </h2>
<form action = "assignStop.php", method = "post">
<?php
   echo "Patients:" . "<br>";
   include 'showPatient.php';
   echo "Doctors:" . "<br>";
   include 'showdoctors.php';
?>
<input type = "submit" name = "choice" value = "Assign">
<input type = "submit" name = "choice" value = "Stop">
</form>
<ol>
</ol>
</body>
</html>
