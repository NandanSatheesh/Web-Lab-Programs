<?php

	echo "<h1 style='text-align:center'> Count Page </h1>" ;

	/* Alternate method - Not recommended
	
	$name = 'counter.txt' ;
	$file = fopen($name,'r') ;
	$hits = fscanf($file,'%d');

	fclose($file) ;

	file_get_contents($name) ;

	$hits[0]++ ;
	$file = fopen($name,'w') ;
	fprintf($file,'%d',$hits[0]);
	fclose($file) ;
	

	echo "<h3 style='text-align:center'>Total number of views :".$hits[0]." </h3>" ;

	*/

	// This is simple XD

	$name = 'counter.txt' ;
	$c = file_get_contents($name) ;
	echo "The number of users visited : ".$c ;
	file_put_contents($name, $c+1);


?>
