<html>
<head>
<title>Registration Form</title>
</head>
<body>
<?php
if (isset($_GET['form_submitted'])){
//this code is executed when the form is submitted
$username = "root";
$password = "";
try {
$conn = new PDO("mysql:host=localhost;dbname=new", $username,
$password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected successfully";
}
catch(PDOException $e) {
echo "Connection failed: " . $e->getMessage();
}
// getting the form fields via GET Method
$park_code = $_GET['park_code'];
$park_name = $_GET['park_name'];
$park_city = $_GET['park_city'];
$park_country = $_GET['park_country'];

// inserting the form data to themepark table
$conn->query("insert into THEMEPARK values('$park_code','$park_name','$park_city','$park_country' )" );
echo 'Your form has been submitted';
?>
<h2>Thank You </h2>
<p>A new Themepark has been have been registered with name as
<?php
echo $park_name ;
?>
</p>
<p>Go <a href="web1.php">back</a> to the form</p>
<?php
}
else {
// this code is executed when the page is loaded
?>
<h2>Registration Form</h2>
<form action="web1.php" method="GET">
<input type="hidden" name="form_submitted" value="1" />
Park Code:<input type="text" name="park_code" placeholder="park code"><br> 
Park name:<input type="text" name="park_name" placeholder="pake name"><br> 
Park City:<input type="text" name="park_city" placeholder="park city"><br>
Park Country:<input type="text" name="park_country" placeholder="park Country">
<input type="submit" value="Submit">
</form>
<?php } ?>
</body>
</html>