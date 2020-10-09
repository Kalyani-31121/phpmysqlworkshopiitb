<!DOCTYPE html>
<html>
<head>
        <title>String</title>
</head>
<body>		
        <form action= "string.php" method= POST>
        Enter string :<input type="text" name=" name"><br>
        <input type="submit" value= "click here">
        </form>
</body>
</html>
<?php

@$string =$_POST['name'];



   
    echo "Number of characters :".strlen($string)."<br>";

    echo "Reverse of string :".strrev($string)."<br>";
    $exparray= explode(" ",$string);
    for($i=0;$i<2;$i++)
    {
    echo "Array of string :".$exparray[$i]."<br>";
    }
     echo "String in lower case :".strtolower($string)."<br>";
     
     echo "String in upper case :".strtoupper($string)."<br>";
     
     $c= substr_replace($string,"Billy",6,11);
     echo "Replaced string is ".$c."<br>";








?>