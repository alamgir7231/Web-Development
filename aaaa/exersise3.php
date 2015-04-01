<?php
// program for factorial 

function factorial($fact){
	$c = $fact;
	while($c > 1)
	{
		$fact = $fact * ($c - 1);
		$c = $c - 1;


	}
	return $fact;
}
echo factorial(4);

echo "<br />";


$fact = 1;

for($a = 6; $a >= 1; $a--){
	$fact = $fact * $a;
}
echo "$fact";

//how we take value from the user?

echo "<br />";
$a = 1;
$b = 2;
$sum = $a + $b;
echo "$sum";

