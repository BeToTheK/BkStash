<!DOCTYPE html>
<html>
<head>
	<title>
		Brands
	</title>
</head>
<body>
<?php

$host = 'localhost';
$user = 'Radbk';
$password = 'bankshot';
$dbname =  'bkdb';


$dsn = 'mysql:host='. $host .';dbname='.$dbname;

$pdo = new PDO($dsn, $user, $password);

$sql = "SELECT * FROM brands;";

?>

<p>Here are the Brands we offer, click on one to see availabilty</p>
</body>
</html>