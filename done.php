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
//query code
//---------------------------------------------------------
$cnic=$_GET['cnic'];
$dob=$_GET['date'];
$doc="select doc_id from medical_staff order by rand() limit 1";
$ward="select ward_no from wards order by rand() limit 1";
$stmt=$conn->prepare($doc);
$stmt->execute();
$result = $stmt->fetchColumn();

$stmt1=$conn->prepare($ward);
$stmt1->execute();
$result1 = $stmt1->fetchColumn();
//---------------------------------------------------------
$conn->query("insert into appointment values('$cnic','$dob','$result','$result1')");
echo 'YOUR appointment has been made for date : ';
echo $dob;
echo "with docter\n";
echo $result;
echo "and ward no";
echo $result1;
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
	<div class="content">
	
		<h2>Enter your Information For Appointment</h2><br>
	<form action="done.php" method="GET" >
		<div class="form">
			<input type="hidden" name="form_submitted" value="1" />
		Cnic <input type="text" placeholder="enter your CNIC" name="cnic"><br>
		Set Appointment Date<input type="date" name='date'><br>
		<br>
	</div>
		
		<button type="submit" value="submit" > Submit Your Data </button>
		
	</form>	

	

	</div>

</div>
<?php } ?>
</body>
</html>