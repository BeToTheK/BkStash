<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<form action="Brands.php" method="get">
num1: <input type="number" name="num1">
<br>
num2: <input type="number" name="num2">
<input type="submit">
</form>
<br>

<?php echo $_GET["num1"]+$_GET["num2"] ?>


</body>
</html>