"<!DOCTYPE html>
<html>
<body>

<?php
	$username = $_POST["username"];
	$password = $_POST["password"];
	if($username=="admin" && $password=="admin123")
	{
		header("location: dashboard.php");
	} 
	else
	{
		header("location: index.php");
	}
?>


</body>
</html>