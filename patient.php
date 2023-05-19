
<html>
<head> 
	<title> Blood Donation </title>
	<link rel="stylesheet" href="style.css">
 </head>

<body>
<?php
//connection code
if (isset($_POST['form_submitted'])){
//this code is executed when the form is submitted
$username = "root";
$password = "";
try {
$conn = new PDO("mysql:host=localhost;dbname=project", $username,
$password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "";
}
catch(PDOException $e) {
echo "" . $e->getMessage();
}

//query code
//---------------------------------------------------------
$cnic=$_POST['cnic'];
$name=$_POST['name'];
$dob=$_POST['dob'];
$contact=$_POST['contact'];
$blood=$_POST['blood'];
$health=$_POST['Status'];

//---------------------------------------------------------
$conn->query("insert into patient values('$cnic','$name','$dob','$contact','$blood','$health')");


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
			<li><a href="blood.html">Blood Information</a></li>
			<li><a href="information.html">Patient Information</a></li>
			
		</ul>

	</div>
	<div class="content">
		<h1> Register Yourself </h1>
	<form action="register-as-donor.html" method="post">
		CNIC<input type="text" name="cnic"><br>
		Name <input type="text" name='name'placeholder="enter your name" ><br>
		Date Of Birth <input type="date" placeholder="enter Date of Birth" name="dob"><br>
		Contact Number <input type="text" name="contact"><br>
		Blood Type Required <input type="text" name="blood"><br>
		HAVE YOU EVER RECIEVED BLOOD BEFORE? <input type="text" name="Status" placeholder="ENTER YES OR NO">
		<br>
		<button type="submit" value="submit" > Submit Your Data </button>

	</form>	

	</div>


</div>
<?php } ?>
</body>
</html>