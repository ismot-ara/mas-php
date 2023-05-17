<?php
//স্মার্ট কোডিং ভার্সেস ডাম্ব কোডিং - কেন নিজের কোড নিজে রিভিউ করা প্রয়োজন
//$n = 10;
$result = 1;
$j = 1;
for($n = 1; $n <= 10; $n++){
    $result *= $n;
    $j++;
    echo "Factorial of {$n} is {$result} \n"; 
}
echo "Total {$j} number of Oparation \n";
//১.২৬ - ফর লুপে মাল্টিপল স্টেপিং নিয়ে আরও কিছু কথা
for($i = 0; $i < 100; $i++){
    //if($i % 7 == 0) echo $i."\n";
   // if($i % 11 == 0) echo $i."\n";
   echo $i% 7 == 0 ? $i."\n": '';
   echo $i% 11 == 0 ? $i."\n": '';
}

for($i = 0, $j = 0; $i <100; $i += 7, $j += 11){
    echo $i."\n";
    echo $j <100? $j."\n": '';
}
 //১.২৭ - হোয়াইল লুপে ++ নিয়ে যেটা মাথায় রাখতে হবে
 $i = 0;
while($i <5){
    echo $i;
    echo PHP_EOL;
    $i++;
}
echo "============\n";
$j = 0;
while($j++ <5){
    echo $j;
    echo PHP_EOL;
}

/* $x = $y++
$x = $y
$y = $y+1  */
echo "============\n";
$j = 0;
while(++$j <5){
    echo $j;
    echo PHP_EOL;
}
//১.২৮ - লুপের মাঝে কন্টিনিউ এবং ব্রেক
for($i = 0; $i < 10; $i++){
    echo $i;
    echo PHP_EOL;
    if($i == 6){
        break;
    }
}

for($i = 20; $i < 50; $i++){
    if($i % 13 == 0){
        echo $i;
        echo PHP_EOL;
        break;
    }
}

for($i = 20; $i < 30; $i++){
    if($i < 27){
        continue;
    }
    echo $i;
    echo PHP_EOL;
}