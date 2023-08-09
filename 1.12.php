<?php
//১.১ - পিএইচপি ডেভেলপমেন্ট শুরু করার জন্য যা দরকার
/*
>>keyword gulo likhe rakhte hobe
>>google search kore pora korte hobe
>>linux use kora valo
>>php download korte hobe
>>vsc te code runner extension>> ctrl+alt+n
*/
//১.২ - ভ্যারিয়েবল পরিচিতি
$age = 16;
$word = "age";
echo $$word;

//new line
echo "\n";
echo $$word;
echo "\n";
$name = "Bangladesh";
echo 'hello '.$name;
echo "\n";
echo "Hello $name";
echo "\n";
echo "Hello {$name}";
echo "\n";
//১.৩ - ভ্যারিয়েবল নিয়ে আরও কথা, কনস্ট্যান্ট এবং কমেন্টস
define('PI', 3.14159);
echo "value of PI = ".PI;
echo "\n";
echo constant('PI');
echo "\n";
$constant = "constant";
echo "value of PI is = {$constant('PI')}";
echo "\n";
//১.৪ - পিএইচপিতে আউটপুট প্রিন্ট করা নিয়ে বিস্তারিত
$name = "Earth";
$age = 60;
var_dump($name, $age);
// data types>integer(12345), double/float(1.23),null, string, boolean, array, object, resource
echo 'we\'re living on earth';
echo "\n";
$fname = "Earth";
$lname = "Pluto";
printf("His %s name is %s %s ","full",$fname,$lname);
echo "\n";
echo " His
full
name
is 
$fname";
echo "\n";
printf("His %s name is %s %s","full", strtoupper($fname),strrev($lname));
//https://www.php.net/printf
//১.৫ - উইন্ডোজের জন্য ভিজ্যুয়াল স্টুডিও তে কোডরানার ফিক্স করা (পিএইচপি নট ফাউন্ড)
//১.৬ - উইন্ডোজের জন্য পিএইচপিস্টর্মে তে কোডরানার ফিক্স করা
//১.৭ - পিএইচপিতে যোগ বিয়োগ গুন ভাগ
echo "\n";
$number = 12;
$number +=13;
$number2 = 15;
$number2 = $number2 -5;
echo $number ,"\n",$number2;
echo "\n";

$number = 12*2;
$number2 = 15/3;
echo $number ,"\n",$number2;

$number = 12%2;
$number = (24-4) /(7-2);
$number++;
$number--;
echo "\n";
//১.৮ - ++ এবং -- নিয়ে আরও কিছু কথা
//oparand(56)
//oparator(+-)
$n =7;
$m =$n++; //$m = $n; $n = $n+1
echo $n, "\n", $m;

echo "\n";


//১.৯ - বিভিন্ন রকমের নাম্বার সিস্টেম নিয়ে আলোচনা
$n = 12; //decimal
$o = 012; //Octal
$h = 0x1B; //Hexadecimal
printf("The number is %d and %d and %d", $n, $o, $h);
echo "\n";
printf("The binary equivalen %d is %b",12,12);
echo "\n";
printf("The hexadecimal equivalent %d is %x", 12, 12);
echo "\n";
printf("The Octal equivalent %d is %o",12, 12);

//১.১০ - প্রিন্টএফ ফাংশনের জাদু
$fname = "Isaac";
$lname = "newton";
printf('His name is %2$s  %1$s',$fname,$lname);
//His name is newton  Isaac

$n = 45.126;
printf("%.2f",$n);
//45.13

$n = 123;
$m = 25;
printf("%04d \n",$n);
printf("%04d \n",$m);
//0123
//0025

$n = 123.3256;
$m = 25.155;
printf("%08.2f",$n); //00123.33
printf("%08.2f",$m); //00025.16

//১.১১ - sprintf নিয়ে কিছু কথা
//Sprintf return kore
$output = sprintf("%08.2f \n",$m);
echo $output;

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
