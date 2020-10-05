<?php
require("connect.php");
$update = mysqli_query( $connect ,"UPDATE class1 SET sub5='99' where name='Rohan'");



?>