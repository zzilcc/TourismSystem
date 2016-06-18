<!DOCTYPE HTML>
<html>
<head>
	<title>Add information</title>
		<meta name="keywords" content="Add"/>
		<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
		<?php include("header.php") ?>
	</head>
	<body>
	<div class="container">
	<?php include("menu.php"); ?>
<div class="row">
<div class="col-md-2">
	<?php include("vmenu.php"); ?>
</div>

<div class="col-md-10">
<?php
session_start();
if($_SESSION['authentication']=1):
if(isset($_SESSION['name'])):
?>

<div class="well bs-component">
<form method="post" action="addinfnew.php" class="form-horizontal">
  <fieldset>
    <legend>Add information</legend>

	<div class="form-group">
		<label for="Title" class="col-md-2 control-label">Scenename</label>
		<div class="col-md-10">
		<input type="text" id="Scenename" placeholder="Scenename" name="Scenename" class="form-control">
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label">news</label>
		<div class="col-md-10">
		<input type="text" placeholder="news" name="news" class="form-control">
		</div>
	</div>

	<div class="form-group">
		<div class="col-md-offset-10">
		<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</div>

	</fieldset>
</form>
	</div>
	<?php
	else:
	?>
	<div class="jumbotron">
	 <h2>Error</h2>

	 <p>You are not the administrator！</p>

	<div class="row">


	 </div>
	 </div>
	</div>
	<?php
	endif;
	?>
<?php
else:
?>
<div class="jumbotron">
  <h2>Please Login</h2>

  <p>请登录再操作！</p>

<div class="row">
<div class="col-md-offset-10">
  <p><a class="btn btn-primary btn-lg" href="login.php">登陆...</a></p>
  </div>
 </div>
</div>

<?php
endif;
?>

</div>
</div>

</div>

<?php include("footer.php"); ?>
	</body>
</html>
