<!DOCTYPE html>
<html>
<head>
	<title>THEMEPARK DATABASE</title>
</head>
<body>
<?php
$username="root";
$password=""; 
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

$query1=$conn->query("select * from themepark");

?>
<table class="table m-3">
	<thead>
		<th>PARK CODE</th>
		<th>PARK NAME</th>
		<th>PARK CITY</th>
		<th>PARK COUNTRY</th>
	</thead>
	<tbody>
		<?php
		while ($row = $query1->fetch(PDO::FETCH_OBJ)) {

			echo "<tr>
			<td>$row->PARK_CODE</td>
			<td>$row->PARK_NAME</td>
			<td>$row->PARK_CITY</td>
			<td>$row->PARK_COUNTRY</td>
			</tr>";
			
		} 
		?>
	</tbody>
</table>

</body>
</html>