<?php
$n = 13;
if($n % 2 == 0){
    echo "$n is an even number";
}else{
    echo "$n is a odd number";
}

if($n > 10){
    echo "$n is greater than 10";
}
/* Logical operators
==
!=
*/
$a = 12;
$b = 13;
if($a != $b){
    echo " A is not equal to B";
}

$alam = 100;
$rahim = 100;
if($alam == $rahim){
    echo "Alam has same amount of money as Rahim";
}elseif($alam> $rahim){
    echo "Alam has more amount of money as Rahim";
}elseif($alam < $rahim){
    echo "Alam has less amount of money as Rahim";
}elseif($alam >= $rahim){
    echo "Alam has same or more amount of money than Rahim";
}
// 8:40
$age = 14;
 
if($age >= 13 && $age <= 19){
    echo "This person is a teenager";
}else{
    echo "This person is not a teenager";
}

$food = "salmon";

if("tuna" == $food || "salmon" == $food){
    echo "It has Vitamin D";
}else{
    echo "We don't know if it contains vitamin D";
}
//13.15