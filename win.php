<?php
	include("config.php");
	session_start();
	
		

	if($_GET['sec'])
	{
		$sec=$_GET['sec'];
	}
	
	$sql="SELECT MAX(vote) FROM cand WHERE section='$sec'"; 
	$result=mysqli_query($con,$sql) or die ("Erron in Queray");
	$row=mysqli_fetch_array($result);
	$win=$row[0];
echo "Number of votes "; echo $row[0];
	echo "<br>";
	$sql1="SELECT * FROM cand WHERE vote='$win'"; 
	$result1=mysqli_query($con,$sql1) or die ("Erron in Queray");
	$row1=mysqli_fetch_array($result1);
echo "Winner is ";
echo $row1[0];

?>
