<?php
include("menu.php");
$db=mysqli_connect("127.0.0.1","root","","travel_information") or die('Could not connect:'.mysql_error());

mysqli_select_db($db,"travel_information");
// $a="INSERT INTO register ('id','name', 'password','gender') VALUES ( " . 'NULL'. " ,' " . $_POST['name']. " ', ' " .  $_POST['password']. " ','".$_POST['gender']." ')";
$a="INSERT INTO  `register` (
`id` ,
`name` ,
`password` ,
`gender`
)
VALUES (
NULL ,  '".$_POST['name']."',  '".$_POST['password']."',  '".$_POST['gender']."'
)";

echo $a;
mysqli_query($db,$a);
mysqli_close($db);
