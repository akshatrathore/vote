<?php
	include("config.php");
	session_start();

	$id=$_POST['id'];
	$pass=$_POST['pass'];
	$_SESSION['id']=$_POST['id'];
	

	$sql="SELECT * FROM login where idnumber='$id' and password='$pass'" ;
	$result=mysqli_query($con,$sql) or die ("Erron in Queray");
	$row=mysqli_fetch_array($result);
	$_SESSION['sec']=$row['section'];
	
	if($result)
	{
		if($row['role']=="USER")
		{

			if($row['vote']==1)
			{
				header("Location:voted.php");
			}
		
			else
			{
				header("Location:vote.php");
			}
		}
		
		elseif($row['role']=="ADMIN")
		{
				header("Location:admin.php");
		}	
	}
	
	else
	{
		echo "Not a Student";
	}
?>
