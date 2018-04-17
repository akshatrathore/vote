<html>
<head>
<style>
body{
	background-color: "#0000FF";
	text-align: center;
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
	  	  ajaxobject.open("GET","section.php");
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
</head>
<body>

		<h1>Welcome</h1>
		<h4>Enter the section winner</h4>
		
		<form metho="POST" action="win.php">
			<input type="button" value="Sections"onclick="members()"/>
			
		

		<div id="display" class="displaybox">
		</div>	
			<input type="submit" value="Win" >
			</form>
</body>
</html>
