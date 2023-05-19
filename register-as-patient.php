
<html>
<head> 
	<title> Blood Donation </title>
	<link rel="stylesheet" href="style.css">
	
 </head>

<body>
<?php
//connection code
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

//query code
//---------------------------------------------------------
$cnic=$_GET['cnic'];
$name=$_GET['name'];
$dob=$_GET['dob'];
$contact=$_GET['contact'];
$blood=$_GET['blood'];


//---------------------------------------------------------
$conn->query("insert into patient values('$cnic','$name','$dob','$contact','$blood')");
echo 'form submitted';

?>
<p>Go <a href="registration.html">back</a> to the form</p>
<?php
}
else {
// this code is executed when the page is loaded
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
	<form action="register-as-patient.php" method="GET">
		<input type="hidden" name="form_submitted" value="1" />
		CNIC<input type="text" name="cnic"><br>
		Name <input type="text" name='name'placeholder="enter your name" ><br>
		Date Of Birth <input type="date" placeholder="enter Date of Birth" name="dob"><br>
		Contact Number <input type="text" name="contact"><br>
		Blood Type <input type="text" name="blood"><br>
		
		<br>
		<button type="submit" value="submit" > Submit form</button>

	</form>	

	</div>


</div>
<?php } ?>
</body>
</html>