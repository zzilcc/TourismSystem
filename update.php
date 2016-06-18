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

  if($_SESSION['authentication']=1):
  if(isset($_SESSION['name'])):
  $db=mysqli_connect("127.0.0.1","root","","travel_information") or die('Could not connect:'.mysql_error());
  mysqli_query($db,"set names utf8");

  if(isset($_POST['Scenename'])) {
		if(isset($_GET["id"])){
  $u = "UPDATE  `sceneinfor` SET  `Scenename` =  '$_POST[Scenename]',
 `Location` =  '$_POST[Location]',
 `cost` =  '$_POST[cost]',
 `Instructions` =  '$_POST[Instructions]' WHERE  `sceneinfor`.`id` =$_GET[id]";
 mysqli_query($db, $u);
//echo $u;
//echo $_GET["id"];
  }
 }

if(isset($_GET["id"])){
 $a="SELECT *
 FROM  `sceneinfor`
 WHERE  `id` =$_GET[id]";
}
 // echo $a;
 $info=mysqli_fetch_assoc(mysqli_query($db,$a));
 mysqli_close($db);
 ?>
 

 <div class="well bs-component">
 <form method="post" action="update.php?id=<?php echo  $_GET['id']; ?>" class="form-horizontal">
   <fieldset>
     <legend>Update information</legend>

 	<div class="form-group">
 		<label for="Title" class="col-md-2 control-label">Scenename</label>
 		<div class="col-md-10">
 		<input type="text" id="Scenename" placeholder="Scenename" name="Scenename" class="form-control" value="<?php echo $info['Scenename'] ?>">
 		</div>
 	</div>

 	<div class="form-group">
 		<label class="col-md-2 control-label">Location</label>
 		<div class="col-md-10">
 		<input type="text" placeholder="Location" name="Location" class="form-control" value="<?php echo $info['Location'] ?>">
 		</div>
 	</div>

 	<div class="form-group">
 		<label class="col-md-2 control-label">cost</label>
 		<div class="col-md-10">
 		<input type="text" placeholder="cost" name="cost" class="form-control" value="<?php  echo $info['cost'] ?>">
 		</div>
 	</div>

 	<div class="form-group">
 		<label class="col-md-2 control-label">Instructions</label>
 		<div class="col-md-10">
 		<input type="text" placeholder="Instructions" name="Instructions" class="form-control" value="<?php echo $info['Instructions'] ?>">
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
 endif;
 ?>
 </div>
 </div>

 </div>
 	</body>
 </html>
