<?php
$host = 'localhost';
$user = 'Radbk';
$password = 'bankshot';
$dbname =  'bkdb';


$dsn = 'mysql:host='. $host .';dbname='.$dbname;

$pdo = new PDO($dsn, $user, $password);

$stmt = $pdo->query('SELECT * FROM inventory');

while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
	echo $row['Product Name'] .'<br>';
}
