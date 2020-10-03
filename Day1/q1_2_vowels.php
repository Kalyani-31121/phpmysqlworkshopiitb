<?php
$a=array("a","d","c");
for($i=0;$i<3;$i++)
{
	switch($a[$i])
{
	case 'a': echo "char is a vowel"."\n";
	break;
	case 'e': echo "char is a vowel"."\n";
	break;
	case 'i': echo "char is a vowel"."\n";
	break;
	case 'o': echo "char is a vowel"."\n";
	break;
	case 'u': echo "char is a vowel"."\n";
	break;
	default : echo "char is consonant"."\n";
}
}

?>