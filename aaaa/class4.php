//using while loop
<?php
$a1= array(
	array("company" => "Honda", "Car" => "Civic", "Engine" => "Wti Vitex"),
	array("company" => "Suzuki", "Car" => "Alto", "Engine" => "Bugati")
);

$length = count($a1); //for counting the length of array

$i = 0;

while($i < $length){
	if($a1[$i]["company"] =="Honda"){
	echo($a1[$i]["company"] ."has". $a1[$i]["Car"]. "car which have". $a1[$i]["Engine"]."<br />");
echo "<br />";
}
$i++;
}
