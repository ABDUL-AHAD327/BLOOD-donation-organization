<html>
<head> 
	<title> Blood Donation </title>
	<link rel="stylesheet" href="style.css">
 </head>

<body>
<?php
if (isset($_GET['form_submitted'])){
//this code is executed when the form is submitted
$username = "root";
$password = "";
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
//-------------------------------------------------
$cnic=$_GET['cnic'];
$name=$_GET['name'];
$dob=$_GET['dob'];
$contact=$_GET['contact'];
$blood=$_GET['blood'];
$health=$_GET['health'];

//-------------------------------------------------
$conn->query("insert into donor values('$cnic','$name','$dob','$health','$contact','$blood')");
echo 'your form has been submitted';
?>
<p> GO <a href="register-as-donor.php">back </a> to the form </p>
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
	<div class="content">
		<h1> Register Yourself </h1>
	<form action="register-as-donor.php" method="GET" >
		<input type="hidden" name="form_submitted" value="1" />
		CNIC<input type="text" name="cnic"><br>
		Name <input type="text" name="name" ><br>
		Date Of Birth <input type="date" name="dob"><br>
		Contact Number <input type="text" name="contact"><br>
		Blood Type <input type="text" name="blood"><br>
		Health Status <input type="text" name="health"><br>
		<br>
		
		<button type="submit" value="submit" > Submit </button>
		
	</form>	

	</div>


</div>
<?php } ?>
</body>
</html>