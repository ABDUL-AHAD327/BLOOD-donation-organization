<!doctype html>
<html>
<head> 
	<title> Blood Donation </title>
	<link rel="stylesheet" href="style.css">
 </head>

<body> 
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
		<h1>WE are here to help</h1>
		<p>Here you will get the info about the donors who have given us permission to share there info with the pateints</p>
			
	<br><br>
	<form action="blood1.php" method="GET" >
		<input type="hidden" name="form _submitted" value="1" />
		Enter The Blood Type<input type="text" name="Bloodtype" placeholder="enter here">
		<button type="submit" value="submit" > Search</button>
	</form>
	</div>

</div>
</body>
</html>