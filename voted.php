<html>
<head>
<title> AJAX Demo </title>
<style>
body{
	background-color: "#0000FF";
	text-align: center;
}
.displaybox{
	color: rgb(0,0,255);	
	margin: auto;
	width: 150px;
	border: 2px solid #000000;
	padding: 10px;
	align: center;
	font: 1.5em normal verdana, helvetica, arial; 
}
</style>
<?php include("config.php");
	session_start();
	
	$id=$_SESSION['id'];
?>
</head>
	<body>
		<h1>hi <?php echo $id ;?>You have Voted</h1>
		<a href="login.php">Click me to go back</a>
		
	</body>
</html>
