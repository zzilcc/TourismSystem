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
      // $TEST=isset($_GET['id']);
			 //var_dump($TEST);


	 	 	 if(isset($_GET["id"])){
	 	 		// echo $_GET["id"];
	 	 	$u = "DELETE FROM `traffic_num` WHERE  `traffic_num`.`id` =$_GET[id]";
	 	  mysqli_query($db, $u);
	 	//  echo $u;
	 	  //echo $_GET["id"];

	 	 }
	 	  mysqli_close($db);

	 	 ?>

 <div class="well bs-component">
 <form method="post" action="deletecus.php?id=<?php echo  $_GET['id'] ?>" class="form-horizontal">
   <fieldset>
     <legend>Update information</legend>
		 <div class="jumbotron">
		   <h2>删除成功</h2>

		   <p>删除成功。</p>

		 <div class="row">
		 <div class="col-md-offset-10">
		   <p><a class="btn btn-primary btn-lg" href="customertraffic.php">Ok</a></p>
		   </div>
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
