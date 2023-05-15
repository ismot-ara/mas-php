<?php
//১.১৭ - সুইচ/কেস নিয়ে আরও কথা
$n = -12;
$r = $n % 2;
switch ($r){
    case 0:
        switch($n){
            case $n > 0:
                echo "$n is a positive even number";
                break;
            case $n < 0:
                echo "$n is a negetive even number";
                break;
        }
        break;
    default:
    switch($n){
        case $n > 0:
            echo "$n is a positive odd number";
            break;
        case $n < 0:
            echo "$n is a negetive odd number";
            break;
    }
}

switch(true){
    case ($r == 0 && $n > 0):
        echo "$n is a positive even number";
        break;
    case($r == 1 && $n > 0):
        echo "$n is a positive odd number";
        break;
    case($r == 0 && $n < 0):
        echo "$n is a negetive even number";
        break;
    case($r == -1 && $n < 0):
        echo "$n is a negetive odd number";
        break;
}

// 1.18
//১.১৮ - সুইচ কেসের একটা মজার ইস্যু
$string = "8balls";
switch ($string){
    case (string) "9balls":
        echo "Nine Ball";
        break;
    case (string) 8:
        echo "8";
        break;
    case (string) "8balls":
        echo "Eight Balls";
        break;
}
//১.১৯ - পিএইচপিতে অপারেটর প্রিসিডেন্স - কে আর আগে রান করে
$f = false || true; // true
$e = false or true ; //($e = false) or true // false
var_dump($f, $e);
