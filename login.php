<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
		<meta name="keywords" content="login"/>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<?php include("header.php") ?>
</head>
	<body>
<?php

session_start();
	if(isset($_SESSION['name']))
		unset($_SESSION['name']);
	if(isset($_SESSION['gender']))
		unset($_SESSION['gender']);
		if(isset($_SESSION['authentication']))
			unset($_SESSION['authentication']);

	if(isset($_POST['name'])) {
		$name=$_POST['name'];
		$password=$_POST['password'];
		$db=mysqli_connect("127.0.0.1","root","","travel_information")
		     or die('Could not connect:'.mysql_error());
		mysqli_query($db,"set names utf8");
		mysqli_select_db($db,"travel_information");
		$sql=mysqli_query($db,"SELECT *
		FROM  `register`
		WHERE  `name` LIKE  '$name'");
		$query = mysqli_fetch_assoc($sql);

		if($query['authentication']==1)
	     $_SESSION['authentication']=1;
		else
		    $_SESSION['authentication']=0;

		if( $query['password'] == $_POST['password'])
		{
			$_SESSION['name'] = $name;
			$_SESSION['gender'] = $query['gender'];
		}else {
			unset($_SESSION['name']);
			unset($_SESSION['gender']);
		}

		mysqli_close($db);
	}
?>

<div class="container">
<?php include("menu.php"); ?>
<div class="row">
<div class="col-md-2">
	<?php include("vmenu.php"); ?>
</div>
<div class="col-md-10">

<?php if(!isset($_SESSION['name'])): ?>
<div class="well bs-component">
<form   method="post" action="login.php" class="form-horizontal">
  <fieldset>
    <legend>Login</legend>

	<div class="form-group">
		<label  class="col-md-2 control-label">Name</label>
		<div class="col-md-10">
		<input type="text" placeholder="Name" name="name" class="form-control">
		</div>
	</div>

	<div class="form-group">
		<label  class="col-md-2 control-label">Password</label>
		<div class="col-md-10">
		<input type="password" placeholder="Password" name="password" class="form-control">
		</div>
	</div>


	<div class="form-group">
		<div class="col-md-offset-10">
		<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</div>
  <fieldset>
</form>
</div>
<?php else: ?>
<div class="jumbotron">
  <h2>登陆成功</h2>

  <p>登陆成功：<?php echo $_SESSION['name'] ?></p>

<div class="row">
<div class="col-md-offset-10">
  <p><a class="btn btn-primary btn-lg" href="index.php">Ok</a></p>
  </div>
 </div>
</div>

<?php endif; ?>

</div>
</div>
<?php include("footer.php"); ?>
</body>
</html>
