<!DOCTYPE html>
<html>
<body>

<?php

	$username = $_POST["username"];
	$password = $_POST["password"];
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_NAME', 'loginform');

	$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

	if(!$conn)
	{
    die("ERROR: Could not connect. " . mysqli_connect_error());
	}

	$sqlU = "SELECT username,password FROM users";
	$resultU = mysqli_query($conn, $sqlU);

	while($row = mysqli_fetch_assoc($resultU)){
		$tempU = $row["username"];
		$tempP = $row["password"];

		if($username==$tempU && $password==$tempP)
		{
			header("location: dashboard.php");
			die();
		} 
	}
	header("location: index.php");
?>


</body>
</html>