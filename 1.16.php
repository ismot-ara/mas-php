<?php
//১.১৬ - কন্ডিশন চেক করার আরেকটি উপায় - সুইচ/কেস
$n = 11;
$r = $n % 2;
switch ($r){
    case 0:
        echo "{$n} is an even number \n";
        break;
    default:
        echo "{$n} is an Odd number \n";
}

$color = 'blue';
switch($color){
    // case 'red':
    //     echo "red is our favourite color";
    //     break;
    // case 'green':
    //     echo "Green  is our favourite color";
    //     break;
    case 'red':
    case 'green':
        echo ucwords($color)." is our favourite color";
        break;
    case 'blue':
        echo "Blue  is not favourite color";
        break;
    default:
        echo "This color is ok";
}

if('red' == $color || 'green' == $color){
    
}