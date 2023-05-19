<?php
//২.১ - ফাংশন কি এবং কিভাবে লিখতে হয়
//encapsulation
 include_once "functions.php";
$x= 5;

if(isEven($x)){  // argument
    echo "$x is an even number";
}else{
    echo "$x is an odd number";
}
// ২.২ - ফাংশন প্যারামিটারের টাইপ হিন্টিং বা টাইপ চেক
$x = 5;
echo "Factorial of $x is ".factorial($x);
//২.৩ - ফাংশন প্যারামিটারের ডিফল্ট ভ্যালু বা অপশনাল প্যারামিটার
$ft = "Coffee";
serve($ft, $n);
//২.৪ - ফাংশনের রিটার্ন টাইপ ফিক্স করে দেয়া
function sum(int $x,int $y,int $z):int{
    return $x+$y+$z;
}
echo sum(1,8,5);
echo PHP_EOL;
//২.৫ - ফাংশনে আনলিমিটেড আর্গুমেন্ট অ্যাক্সেপ্ট করা
function sume(int ...$numbers):int{
    $result  = 0;
    for($i=0;$i<count($numbers);$i++){
        $result += $numbers[$i];
    }
    return $result;
}
echo sume(1,8);
//২.৬ - একটা বড় ফাংশনকে ছোট ফাংশনে ভাগ করা
function doTaskA(){
    echo "Step A Done \n";
}
function doTaskB(){
    echo "Step B Done \n";
}
function doTaskC(){
    echo "Step C Done \n";
}
function doTaskD(){
    echo "Step D Done \n";
}
function doTaskE(){
    echo "Step E Done \n";
}
function doTheLargerTask(){
    
    doTaskA();
    doTaskB();
    doTaskC();
    doTaskD();
    doTaskE();
}
doTheLargerTask();
//২.৭ - রিকার্সন এবং রিকার্সিভ ফাংশন
//recursion
function printN($i){
    if($i >= 10){
        return;
    }
    echo $i."\n";
    $i++;
    printN($i);
}
printN(5);

function printNumber($counter, $end, $stepping = 1){
    if($counter >$end){
        return;
    }
    echo $counter."\n";
    $counter += $stepping;
    printNumber($counter, $end, $stepping);
}
printNumber(21,37,2);
//২.৮ - রিকার্সিভ ফাংশনের সাহায্যে ফিবোনাচ্চি সিরিজ প্রিন্ট করা
function fibonacci($old, $new, $end){
    static $start;
    $start = $start ?? 1;
    if($start > $end){
        return;
    }
    $start++;

    echo $old." ";
    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;

    fibonacci($old, $new, $end);
}
fibonacci(0,1,10);

//২.৯ - পিএইচপিতে ভ্যারিয়েবল স্কোপ (খুবই ইম্পর্ট্যান্ট)
$name = "Earth";
function doSomething(){
    //global $name;
    //echo $name;
    echo $GLOBALS['name'];
}
doSomething();

function doSomethinge(){
    static $i; // static scope
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo "\n";
}
doSomethinge();
doSomethinge();
doSomethinge();
doSomethinge();
doSomethinge();
doSomethinge();
doSomethinge();

// ২.১০ - রিকার্সিভ ফাংশনের সাহায্যে ফ্যাক্টোরিয়াল বের করা
function factorial($n){
    if ($n <= 1){
        return 1;
    }
    return $n * factorial($n - 1);
}
echo factorial(3);
