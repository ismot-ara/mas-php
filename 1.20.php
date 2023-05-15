<?php
//১.২০ - পিএইচপিতে কন্ট্রোল স্ট্রাকচারের অল্টারনেটিভ সিনট্যাক্স নিয়ে আলোচনা
$n =12;

if($n%2==0){
    echo "Even Number";
}else{
    echo "Odd number";
}
echo PHP_EOL;

if($n%2==0):
    echo "Even Number";
    echo PHP_EOL;
else:
    echo "Odd Number";
    echo PHP_EOL;
endif;

echo PHP_EOL;

switch ($n%2 == 0):
    case 0:
    echo "Even Number";
    break;
    default:
    echo "Odd Number";
endswitch;

if($n%2==0):
    ?>
    Even Number
<?php 
else:
    ?>
   Odd Number
   <?php
endif;

//১.২১ - টার্নারি অপারেটর নিয়ে কিছু জিনিস পরিষ্কার করা
