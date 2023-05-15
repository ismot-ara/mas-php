<?php
//১.১৪ - নেস্টেড ইফ এলস এবং কোডের রিডেবিলিটি
$condition1 = true;
$condition2 = false;
$condition3 = true;
if($condition1){
    if($condition2){
        if($condition3){
            echo "hello";
        }else{
            echo "no 1";
        }
    }else{
        echo "no 2";
    }
}else{
    echo "no 3";
}
echo "\n";
if($condition1 && $condition2 && $condition3){
    echo "Hello";
}elseif($condition1 && $condition2){
    echo "no 1";
}elseif($condition1){
    echo "no 2";
}else{
    echo "no 3";
}