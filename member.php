
<?php include("config.php"); session_start();
$sec=$_SESSION['sec'];

	$sql="SELECT * FROM cand where section='$sec'" ;
	$result=mysqli_query($con,$sql) or die ("Erron in Queray");
while($row=mysqli_fetch_array($result))
{
$name=$row['name'];

echo "<input type=radio name=ele  value=$name >$name<br>";
}

?>



