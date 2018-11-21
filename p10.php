<?php 

require('config.php');

echo "connected " ;
$sql = "SELECT * FROM student";
$result = $conn->query($sql); 

$usn = array() ;

echo "<br>";
echo "<table border='2'><caption>Before Sorting </caption>";
echo "<tr><th>USN</th><th>NAME</th><th>Marks</th></tr>"; 

if ($result->num_rows > 0)
{
while($row = $result->fetch_assoc())
{ 
	echo "<tr><td>". $row["usn"]."</td>";
	echo "<td>". $row["name"]."</td>";
	echo "<td>". $row["marks"]."</td></tr>";
	$usn[] = $row["usn"] ;
}
}

$n = sizeof($usn) ;

for($i = 0 ; $i < $n-1 ; $i++ )
{
	$pos = $i ;

	for($j = $i + 1 ; $j < $n ; $j++ )
	{
		if( $usn[$pos] < $usn[$j])
		{
			$pos = $j ;
		}
	}

	if( $pos != $i)
	{
		$temp = $usn[$i] ;
		$usn[$i] = $usn[$pos] ;
		$usn[$pos] = $temp ;

	}
}

$name = [] ;
$marks = [] ;
$result = $conn->query($sql);
if ($result->num_rows> 0)
{
	while($row = $result->fetch_assoc()) 
	{
		for($i=0;$i<$n;$i++) 
		{
			if($row["usn"]== $usn[$i]) 
			{
				$name[$i]=$row["name"];
				$marks[$i]=$row["marks"];
			}
		}
	}
}

echo "<table border='2'><caption>After Sorting </caption>";
echo "<tr><th>USN</th><th>NAME</th><th>Marks</th></tr>"; 
for($i = 0 ; $i < sizeof($usn) ; $i++)
{
	echo "<tr><td>". $usn[$i]."</td>";
	echo "<td>". $name[$i]."</td>";
	echo "<td>". $marks[$i]."</td></tr>";
}


?>