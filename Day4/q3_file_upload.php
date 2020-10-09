<!DOCTYPE html>
<html>
<head>
	<title>Upload File</title>
</head>
<body>
       <h1>UPLOAD FILE</h1>
       <form action="q3_file_upload.php" method="POST" enctype="multipart/form-data"> 
       <input type="file" name="myfile"><br><br>
       <input type="submit" value="upload"><br>
       </form>
</body>
</html>
<?php
$name=$_FILES["myfile"]["name"];
$type=$_FILES["myfile"]["type"];
$size=$_FILES["myfile"]["size"];
$temp=$_FILES["myfile"]["tmp_name"];
$error=$_FILES["myfile"]["error"];

echo "File name :".$name."<br>";
echo "File Type :".$type."<br> ";
echo "File size :".$size."<br>" ;
echo "File location :".$temp."<br>";
echo "File error :".$error."<br>";

?>