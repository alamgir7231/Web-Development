<?php

#for loop
for ($leap = 2000; $leap < 2050; $leap = $leap + 4){

  echo "<p> $leap </p>";
}


#now we discuss while loop

$a=2;
while ($a <= 10) {
	# code...
	echo "<b><br>$a</br></b>";
	$a++;


}

//for loop 
$a;
while ($a<33) {
	# code...
	echo "$a</br>";
	$a++;
}
//function that  parformed a specific work  function are two types pre_define and user define function
//now we discuss user define function function_name(arguments,------)  Arguments and return are not must


function redirect_to($location = NULL){
	//Function to redirect to other pages with the help of this code we go from one page to another
	if ($location != NULL) {
		
	header("location: {$location}");
	exit;
}
}

redirect_to("http://www.google.com.pk");

