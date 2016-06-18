<?php
$cur = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);
?>
<div class="row">
<div class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Travel System</a>
    </div>
    <div class="navbar-collapse collapse navbar-responsive-collapse">
      <ul class="nav navbar-nav">
	  	<li><a href="index.php"><i class="material-icons">home</i> Home</a></li>
<?php
if($cur == "register.php" || $cur == "index.php" || $cur == "administratorlogin.php"):
?>
<?php
if(isset($_SESSION['name'])):
?>
		<li><a href="logout.php"><i class="material-icons">lock_open</i> Logout(<?php echo $_SESSION['name']?>)</a></li>
<?php
else:
?>
		<li><a href="login.php"><i class="material-icons">lock</i> Login</a></li>

		<li><a href="register.php"><i class="material-icons">grade</i> Register</a></li>

<?php
endif;
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
	</div>
	</div>
	</div>
</div>
