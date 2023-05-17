<?php
//2.1
function isEven($n) // parameter
{
    if($n % 2 == 0){
        return true;
    }
    return false;
}
// ২.২ - ফাংশন প্যারামিটারের টাইপ হিন্টিং বা টাইপ চেক
function factorial(int $n){
    $result = 1;
    for($i = $n; $i > 1; $i--){
        $result *=$i;
    }
    return $result;
}
//২.৩ - ফাংশন প্যারামিটারের ডিফল্ট ভ্যালু বা অপশনাল প্যারামিটার
function serve($foodType, $numberOfItems= "1cup"){
    echo "{$numberOfItems} of {$foodType} has been served";
}