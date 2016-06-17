<!DOCTYPE html>
<html>
<head>
	<title>register</title>
		<meta name="keywords" content="register"/>
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

if(isset($_POST['name'])) {
$db=mysqli_connect("127.0.0.1","root","","travel_information") or die('Could not connect:'.mysql_error());
mysqli_query($db,"set names utf8");
mysqli_select_db($db,"travel_information");
$sql="SELECT *
FROM  `register`
WHERE  `name` =  '$_POST[name]'";
if(mysqli_num_rows(mysqli_query($db, $sql)) == 0) {
$a="INSERT INTO  `register` (
`id` ,
`name` ,
`password` ,
`gender`,
`authentication`
)
VALUES (
NULL ,  '".$_POST['name']."',  '".$_POST['password']."',  '".$_POST['gender']."'
,  '0')";
// echo $a;
mysqli_query($db,$a);
$_SESSION['name'] = $_POST['name'];
$_SESSION['gender'] = $_POST['gender'];
}
else {
	echo  '<script>alert("User name already exists,please input again"); </script>';
if(isset($_SESSION['name']))
	unset($_SESSION['name']);
if(isset($_SESSION['gender']))
	unset($_SESSION['gender']);

}
//echo @$_POST['name'];
//echo @$_POST['password'];
//echo @$_POST['agapassword'];
if($_POST["password"]==NULL)
    echo '<script>alert("password cannot be empty"); </script>';
		if(isset($_SESSION['name']))
			unset($_SESSION['name']);
		if(isset($_SESSION['gender']))
			unset($_SESSION['gender']);
elseif($_POST["password"]!=$_POST["agapassword"])
		echo '<script>alert("Twice input password differently, please enter again!"); </script>';

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
<form   method="post" action="register.php" class="form-horizontal">
  <fieldset>
    <legend>Register</legend>

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
		<label  class="col-md-2 control-label">Password again</label>
		<div class="col-md-10">
		<input type="password" placeholder="Password" name="agapassword" class="form-control">
		</div>
	</div>

	<div class="form-group">
		<label  class="col-md-2 control-label">Gender</label>

		<div class="col-md-10">
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="gender" value="male" checked="">
			Male
          </label>
        </div>
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="gender" value="female">
			Female
          </label>
        </div>
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
<? else: ?>
<div class="jumbotron">
  <h2>注册成功</h2>

  <p>用户已注册：<?php echo $_SESSION['name'] ?></p>

<div class="row">
<div class="col-md-offset-10">
  <p><a class="btn btn-primary btn-lg" href="index.php">Ok</a></p>
  </div>
  </div>
</div>
<? endif; ?>
</div>
</div>
<?php include("footer.php"); ?>
</body>
</html>
