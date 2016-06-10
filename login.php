<?php session_start();
if(isset($_SESSION['views']))
  $_SESSION['views']=$_SESSION['views']+1;
else
  $_SESSION['views']=1;
echo "Views=". $_SESSION['views'];?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
#content li{
	display: inline;
	font-size: 20px;
}
#content ul{
	list-style-type:none;
	margin:0;
	padding:0;
	}

#content a:link,a:visited
	{
	display:inline-block;
	font-weight:bold;
	color:#FFFFFF;
	background-color:#66ccff;
	width:120px;
	text-align:center;
	padding:4px;
	text-decoration:none;
	text-transform:uppercase;
	}
#content a:hover,a:active
	{
	background-color:#cc0000;
	}
	p {
		color:#66ccff;
	}
	body{
		font-size: 25px;
	}
	</style>
	<title>Login</title>
		<meta name="keywords" content="login"/>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
</head>
	<body>
<div id="content">
	<ul>
<li><a href="index.html">Comeback Home</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<li><a href="register.html">register</a></li>
</ul></div>

<form   method="post" ;align=center action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
<p>Name: <input type="text" name="name" /></p>
<p>Password: <input type="text" name="password" /></p>
<input type="submit" value="Submit" />
</form>
<?php
//retrieve session data
echo "Pageviews=". $_SESSION['views'];
?>
</body>
</html>
