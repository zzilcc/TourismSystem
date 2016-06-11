<!DOCTYPE HTML>
<html>
<head>
	<title>Update information</title>
		<meta name="keywords" content="Update"/>
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
$db=mysqli_connect("127.0.0.1","root","","travel_information") or die('Could not connect:'.mysql_error());

if(isset($_POST['Title'])) {
$u = "UPDATE  `information` SET  `title` =  '$_POST[Title]',
`address` =  '$_POST[Address]',
`time` =  '$_POST[Time]',
`impression` =  '$_POST[Impression]' WHERE  `information`.`id` =$_GET[id]";
mysqli_query($db, $u);

}

$a="SELECT * 
FROM  `information` 
WHERE  `id` =$_GET[id]";

// echo $a;
$info=mysqli_fetch_assoc(mysqli_query($db,$a));
mysqli_close($db);
?>

<div class="well bs-component">
<form method="post" action="update.php?id=<?php echo $_GET['id'] ?>" class="form-horizontal">
  <fieldset>
    <legend>Update information</legend>

	<div class="form-group">
		<label for="Title" class="col-md-2 control-label">Title</label>
		<div class="col-md-10">
		<input type="text" id="Title" placeholder="Title" name="Title" class="form-control" value="<?php echo $info['title'] ?>">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-2 control-label">Address</label>
		<div class="col-md-10">
		<input type="text" placeholder="Address" name="Address" class="form-control" value="<?php echo $info['address'] ?>">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-2 control-label">Date</label>
		<div class="col-md-10">
		<input type="date" placeholder="<?php echo date('Y-m-d'); ?>" name="Time" class="form-control" value="<?php  echo $info['time'] ?>">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-2 control-label">Impression</label>
		<div class="col-md-10">
		<input type="text" placeholder="Impression" name="Impression" class="form-control" value="<?php echo $info['impression'] ?>">
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
endif;
?>
</div>
</div>

</div>
	</body>
</html>
