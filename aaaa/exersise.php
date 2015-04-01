<?php
#for loop
for ($i=0; $i <10 ; $i++) {    //initalizeing condition and incrementing are same place
	echo "<p> $i</p>";
}


$a=4;
while ($a <= 10) {		//first initalize after that condition after that echo data and last incrementing
echo "$a &nbsp";
$a++;
}


echo "</br>";


$c=1;
do {
	echo "$c &nbsp"; //first initalize after that echo  after that inceementing and last we write condition
	$c++;
} while ( $c<= 10);

//foreach loop
echo "</br>";

$arr = array(1, 6, 3, 5);

foreach ($arr as &$value) {
    $value = $value++;
    echo "$value &nbsp";
}


echo "<br />";

function alamgir($location = Null){
if ($location != Null){
	header("Location: {$location}");
	exit;
}
}
alamgir("http://www.google.com.pk");
echo "</ br>";

//wht is the defference b/w header and link
// header is work through php and links work through html