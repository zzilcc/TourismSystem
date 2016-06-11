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
if(isset($_SESSION['name'])):
?>

<div class="well bs-component">
<form method="post" action="addinf.php" class="form-horizontal">
  <fieldset>
    <legend>Add information</legend>

	<div class="form-group">
		<label for="Title" class="col-md-2 control-label">Title</label>
		<div class="col-md-10">
		<input type="text" id="Title" placeholder="Title" name="Title" class="form-control">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-2 control-label">Address</label>
		<div class="col-md-10">
		<input type="text" placeholder="Address" name="Address" class="form-control">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-2 control-label">Date</label>
		<div class="col-md-10">
		<input type="date" placeholder="<?php echo date('Y-m-d'); ?>" name="Time" class="form-control">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-2 control-label">Impression</label>
		<div class="col-md-10">
		<input type="text" placeholder="Impression" name="Impression" class="form-control">
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
