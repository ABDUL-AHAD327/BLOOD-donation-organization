<!doctype html>
<html>
<head> 
	<title> Blood Donation </title>
	<link rel="stylesheet" href="style.css">
 </head>

<body> 

<?php
if (isset($_GET['form_submitted'])){
//this code is executed when the form is submitted
$$username="root";
$password=""; 
try {
$conn = new PDO("mysql:host=localhost;dbname=project", $username,
$password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected successfully";
}
catch(PDOException $e) {
echo "Connection failed: " . $e->getMessage();
}
//query code
//---------------------------------------------------------
$cnic=$_GET['cnic'];
$dob=$_GET['dob'];
$conn->query("update appointment set appointment_date='$dob' where cnic='$cnic'");
echo "YOUR APPOINTMENT HAS BEEN updated\n";
echo "your new date is";
echo $dob;
?>
<p> GO <a href="appointment.php">back </a> to the form </p>
<?php
}
else{
?>
<div class="banner">
	<div class="navbar">
		<img src="blood3.jpg" class="logo">
	
		<ul>
			<li><a href="bloodDonation.html">Home</a></li>
			<li><a href="registration.html">Registration</a></li>
			<li><a href="blood.php">Blood Information</a></li>
			<li><a href="Appointment.php">Appointment</a></li>

		</ul>

	</div>
	<div class="content1">
		<h1>UPDATE FORM</h1>
		<p> </p>
	
	<div >
		<form action="update.php" method="GET">
			<h1>PLEASE CHOOSE A NEW DATE FOR YOUR APPOINTMENT</h1>
			<div class="form1">
				<input type="hidden" name="form_submitted" value="1" />
				CNIC<input type="text" placeholder="PLEASE ENTER CNIC HERE" name="cnic"><br>
				NEW APPOINTMENT DATE<input type="date" placeholder="PLEASE ENTER date" name="dob"><br>

			</div>
			<button type="submit" value="submit">CONFIRM</button>
	</form>
		
	</div>
	</div>

</div>
<?php
}?>
</body>
</html>