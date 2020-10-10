<!DOCTYPE html>
<html>
<head>
	<title>Day5</title>
</head>
<body>
	<form method="POST" action="q1_md5.php">
		<label>Enter Username</label>
		<input type="text" name="username">
		<br>
		<br>
		<label>Enter Password</label>
		<input type="password" name="password">
		<br>
		<input type="submit" value="submit">

	</form>

</body>
</html>
<?php
require("connect.php");

@$name=$_POST["username"];
@$password= $_POST["password"];
@$password=md5($password);
$res="INSERT INTO user VALUES ('','$name','$password')";
if ($conn->query($res) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $res . "<br>" . $conn->error;
    }



?>