<?php
require("connect.php");


@$a=$_POST['name'];
@$b=$_POST['sub1'];
@$c=$_POST['sub2'];
@$d=$_POST['sub3'];
@$e=$_POST['sub4'];
@$f=$_POST['sub5'];
@$omarks=$b+$c+$d+$e+$f ;
@$tmarks=500;
@$p= ($omarks*100)/$tmarks ;
if($a)
{
	echo"Name of student :".$a."<br>";
	echo"Marks in Each subject"."<br>";
	echo"Subject 1:".$b."<br>";
	echo"Subject 2:".$c."<br>";
	echo"Subject 3:".$d."<br>";
	echo"Subject 4:".$e."<br>";
	echo"Subject 5:".$f."<br>";
	echo"Marks obtained:".$omarks."<br>";
	echo"Total marks:".$tmarks."<br>";
	echo"Percentage:".$p."<br>";
}

$write=mysqli_query($connect,"INSERT INTO class1 VALUES('','$a','$b','$c','$d','$e','$f','$omarks','$tmarks','$p')")or die("Unable to connect to MySQL: " .mysqli_error($connect))	;

?>