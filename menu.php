<?php
$cur = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);
?>

<ul>
<li ><a href="index.php">Home</a></li>
<?php
if($cur == "register.php"):
?>
<li><a href="login.php">Login</a></li>
<?php
endif;
?>

<?php
if($cur == "login.php"):
?>
<li><a href="register.php">Register</a></li>
<?php
endif;
?>
</ul>
<br><br>
