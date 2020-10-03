<html>
<from action ='vari.php' method='GET'>
<input type='text' name ='side1'><br>
<input type='text' name ='side2'><br>
<input type='text' name ='side3'><br>
<input type='submit' value='click here'>
</form>
</html>
<?php
@$a=$_GET['side1'];
@$b=$_GET['side2'];
@$c=$_GET['side3'];
if($a)
{
if($a==$b && $b==$c)
	echo "equilateral";
else 
	if($a==$b||$b==$c||$a==$c)
		echo "iscosceles";
	else
		echo"scalean";
}
?>







