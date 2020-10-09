<?php
$file = file_get_contents("count.txt");
$visitors = $file+1;
$newfile=fopen("count.txt","w");
fwrite($newfile, $visitors);
echo "You have ".$visitors." visitors <br>";

$conn = mysqli_connect("localhost","root","") or die(mysqli_connect_error());
mysqli_select_db($conn,"result") or die(mysqli_error($conn));

echo "Connected!! <br>";

?>


<!DOCTYPE html>
<html>
<head>
      <title>Visitor counter</title>
</head>
<body>	  
<form  action='process.php' method='POST'>
Name    :<input type='text' name='name'><br>
subject1:<input type='text' name='sub1'><br>
subject2:<input type='text' name='sub2'><br>
subject3:<input type='text' name='sub3'><br>
subject4:<input type='text' name='sub4'><br>
subject5:<input type='text' name='sub5'><br>
<input type='submit' value ='click here'>
</form>
</body>
</html>
