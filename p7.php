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

</head>

<body>




<?php
	
	echo '<p> '.date("h:i:sa").'</p' ;

	//echo '<p>'.date("h:i:sa").'</p>' ;
?>

</body>
</html>