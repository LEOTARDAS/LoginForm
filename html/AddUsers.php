<!DOCTYPE html>
<html>
<body>

<?php

$usernameS = $_POST["usernameS"];
$passwordS = $_POST["passwordS"];

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'loginform');

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$conn)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sqlU = "SELECT id,username FROM users";
	$resultU = mysqli_query($conn, $sqlU);

	while($row = mysqli_fetch_assoc($resultU)){
		$tempU = $row["username"];
		if($usernameS==$tempU)
		{
			echo 'User exists!';
			die();
		}
	}

$sqlS = "INSERT INTO users (username,password) VALUES ('$usernameS','$passwordS')";

if($conn->query($sqlS) === TRUE){
	header("location: index.php");
}
else
{
	echo 'THERE WAS A PROBLEM';
}



?>
</body>
</html> 