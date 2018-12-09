<!DOCTYPE html>
<html>
<head><title>Display Server Time</title>
<style>
p {
	border:5px solid green ;
	padding:10px;
	width:80%;
	height:80%;
	background-color:red;
	color:blue;
	text-align:center;
	font-size: 40px;
}


</style>

<script>

	function showdate() 
	{

		var d = new Date() ;
		var h = d.getHours() ;
		var m = d.getMinutes() ;
		var s = d.getSeconds() ;
		document.getElementById("client-date").innerHTML = (h+':'+m+':'+s);

		setTimeout(showdate,1000);
		
	}


</script>


</head>

<body onload="showdate()">
	
	<p id='client-date'></p>

	<?php
		date_default_timezone_set("Asia/Kolkata");
		echo '<p id="server-date"> '.date("h:i:sa").'</p>' ;

	?>



</body>
</html>
