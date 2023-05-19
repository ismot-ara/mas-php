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
