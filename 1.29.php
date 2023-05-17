<?php
//১.২৯ - লুপ দিয়ে ফিবোনাচ্চি সিরিজ প্রিন্ট করা
$veryold = 0;
$old = 1;
$new = 1;
for($i = 0; $i <10; $i++){
    echo $veryold." ";
    $old = $new;
    $new = $old + $veryold;
    $veryold = $old;
}
//১.৩০ - স্পেসশিপ অপারেটর
$x = 7;
$y = 7;

function greaterOrSmaller($x, $y){
    if($x > $y){
        return 1;
    }else if($x == $y){
        return 0;
    }else{
        return -1;
    }
}

if(greaterOrSmaller($x, $y)==1){
    echo "{$x} is greater than {$y}"; 
}else if(greaterOrSmaller($x, $y)==0){
    echo "{$x} is equal to {$y}"; 
}else if(greaterOrSmaller($x, $y)==-1){
    echo "{$x} is smaller than {$y}"; 
}

echo "\n";
$result = $x <=> $y;
if($result == 1){
    echo "{$x} is greater than {$y}"; 
}else if($result == 0){
    echo "{$x} is equal to {$y}"; 
}else if($result == -1){
    echo "{$x} is smaller than {$y}"; 
}
//১.৩১ - নাল কোলেস অপারেটর
//??
$default_lat = 23.8;
$default_lon = 90.8;
$user_lat;
$lat = isset($user_lat) ? $user_lat : $default_lat;
echo $lat;

if(isset($user_lat)){
    $lat = $user_lat;
}else{
    $lat = $default_lat;
}

//null collase
$lat = $user_lat ?? $default_lat;