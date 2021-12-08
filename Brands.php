<!DOCTYPE html>
<html>
<head>
	<title>
		ShitCalc
	</title>
	
</head>
<body>

This is where you enter stuff and cpu does stuff too

<form action="Brands.php" method="get">
num1: <input type="number" name="num1">
<br>
num2: <input type="number" name="num2">
<input type="submit">
</form>
<br>

<?php echo "this is the sum: ", $_GET["num1"]+$_GET["num2"]?>

</body>


</html>