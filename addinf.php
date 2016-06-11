<?php
include("menu.php");
session_start();
$db=mysqli_connect("127.0.0.1","root","","travel_information") or die('Could not connect:'.mysql_error());

mysqli_select_db($db,"travel_information");
$a="INSERT INTO  `information` (
`id` ,
`name` ,
`title` ,
`address` ,
`time` ,
`impression`
)
VALUES (
NULL ,  '".$_SESSION['name']."',  '".$_POST['Title']."',  '".$_POST['Address']."',  '".$_POST['Time']."',  '".$_POST['Impression']."'
)";


// echo $a;
mysqli_query($db,$a);
mysqli_close($db);
