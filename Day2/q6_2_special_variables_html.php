<html>
<form  action='q6_2_special_variables_html.php' method='POST'>
Name    :<input type='text' name='name'><br>
subject1:<input type='text' name='sub1'><br>
subject2:<input type='text' name='sub2'><br>
subject3:<input type='text' name='sub3'><br>
subject4:<input type='text' name='sub4'><br>
subject5:<input type='text' name='sub5'><br>
<input type='submit' value ='click here'>
</form>
</html>
<?php
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
	

?>