<?php
// string we pass in 'A' signle code
//local and global : local we define in the function and globel we define out the functions

//wht is the defference b/w header and link headr work without clicking and link work after the clicking
//wht is the deffernce b/w impleciti and expleciti: impleciti value change by defualt  and explicity we change vale by 
//code for example $a + $b , $a, $b;
//java scrip is a clinet server php work server side 
//client side scripting language useing browser like java script 
//server side language it send msg to the server like php it send msg to the appochi or wemp server.
 
 function reminder($a = NULL, $b = NULL){
 	return $a % $b;
 }

 $reminder = reminder(13,2);
var_dump($reminder);


echo "<br />";
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 function div($a = NULL, $b = NULL){
 	return $a / $b;
 }

 $div = div(12,5);
var_dump($div);

echo "<br />";
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
 function sum($a = NULL, $b = NULL){
 	return $a + $b;
 }

 $sum = sum (12,5);
var_dump($sum);

//&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&
 function sub($a = NULL, $b = NULL){
 	return $a - $b;
 }

 $sub = sub(12,5);
var_dump($sub);

