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
<script>
	var ajaxobject=new XMLHttpRequest();
	function members() {
	  if(!ajaxobject)
	  {
	  	document.getElementById("display").innerHTML="AJAX obejct could not be created";
	  	return;
	  }
	  	  ajaxobject.open("GET","member.php");
	  	  ajaxobject.send();
	  	  ajaxobject.onreadystatechange=getResponse; 	
	}
	function getResponse(){
		if(ajaxobject.readyState == 4 && ajaxobject.status == 200)
		{
			document.getElementById('display').innerHTML=ajaxobject.responseText;
		}
	}

	
</script>
<?php include("config.php"); session_start(); $id=$_SESSION['id']; ?>
</head>
	<body>
		<h1>Elections</h1>
		<h4>For CR Post</h4>
		<h3>Welcome <?php echo $id ;?> Please vote</h3>
		<form metho="POST" action="update.php">
			<input type="button" value="members"onclick="members()"/>
			
		

		<div id="display" class="displaybox">
		</div>	
			<input type="submit" value="Vote" >
			</form>
	</body>
</html>
