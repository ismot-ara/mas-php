<?php
//১.২২ - বিভিন্ন রকম লুপের সাথে পরিচয়
for($i = 0; $i <= 10; $i += 1){
    echo $i;
    echo PHP_EOL;
}
//Odd number
for($i = 1; $i < 20; $i += 2){
    echo $i;
    echo PHP_EOL;
}
//star print
for($i = 1; $i < 10; $i ++){
    //echo $i;
    echo PHP_EOL;
    for($j = 0; $j < $i; $j++){
        echo "*";
    }
}
//while loop
$i = 0;
while($i < 10){
    $i++;
    echo $i.PHP_EOL;
}
// do
$i = 0;
do{
    $i++;
    echo $i.PHP_EOL;
}while($i < 10);
//Go to
echo "GO TO \n";
$i = 0;
a: $i++;
echo $i.PHP_EOL;
if($i<10)goto a;
//১.২৩ - ফর লুপে মাল্টিপল স্টেপিং
for($i = 10; $i >0; $i--){
    echo $i;
    echo PHP_EOL;
}

for($i = 10; $i >0; $i--){
    echo $i.":".(10-$i);
    echo PHP_EOL;
}
/*10:0
9:1
8:2
7:3
6:4
5:5
4:6
3:7
2:8
1:9 */
for($i = 10, $j = 1; $i >0; $i-=1,$j++){
    echo $i.":".$j;
    echo PHP_EOL;
}
//১.২৪ - ফর লুপ দিয়ে কোন নাম্বারের ফ্যাক্টোরিয়াল বের করা
$n = 5;
for($i = $n, $factorial = 1; $i >1; $i--){
    $factorial *= $i;
}
printf("Factorial of %d is %d", $n , $factorial);