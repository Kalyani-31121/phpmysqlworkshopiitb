<?php
    $n=array(array(2,10),array(13,3));
    $t=array(array(8,3),array(7,5));

    echo "Addition of matrix is ";
    echo"\n";
    for($i=0;$i<2;$i++)
    {
        for($j=0;$j<2;$j++)
        {
            echo $n[$i][$j]+$t[$i][$j]." ";
        }
        echo "\n";
    }
?>