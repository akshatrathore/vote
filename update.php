<?php
	include("config.php");
	session_start();
	
	$id=$_SESSION['id'];	

	if($_GET['ele'])
	{
		$ele=$_GET['ele'];
	}
	$sql="SELECT * FROM cand where name='$ele'" ;
	$result=mysqli_query($con,$sql) or die ("Erron in Queray");
	$row=mysqli_fetch_array($result);
	
	$vote=$row['vote'];
	$vote=$vote+1;
	$voted=1;
	
	$sql1="UPDATE cand SET vote='$vote' WHERE name='$ele'" ;
	$result1=mysqli_query($con,$sql1) or die ("Erron in Queray");

	$sql2="UPDATE login SET vote='$voted' WHERE idnumber='$id'" ;
	$result2=mysqli_query($con,$sql2) or die ("Erron in Queray");

	if(($result1)&&($result1))
	{
		header("Location:login.php");
	}
	
?>

