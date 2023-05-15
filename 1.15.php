<?php
//১.১৫ - পিএইচপিতে টার্নারী অপারেটর এবং নেস্টেড টার্নারী অপারেটর নিয়ে কাজ করা
$n = 10;
if( 12 == $n){
    echo "Twelve";
}else if(10 == $n){
    echo "Ten";
}else{
    echo "A number";
}
echo "\n";

//$numberInWord = (12 == $n) ? "Twelve" : "A Number";
$numberInWord = ((12 == $n) ? "Twelve" : (10 == $n)) ? "Ten": "A Number";
echo $numberInWord;

echo "\n";

if($n % 2 == 0){
    echo "Even Number";
}else{
    echo "Odd Number";
}
echo "\n";
$result = ($n % 2 == 0) ? "Even Number" : "Odd Number";
echo $result;
