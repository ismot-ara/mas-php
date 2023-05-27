<?php
//৩.৪ - স্ট্রিং থেকে অ্যারে এবং অ্যারে থেকে স্ট্রিং, মাল্টিপল ডেলিমিটার
//$vegetables = explode(', ','bringal, brocolli, carrot, capsicam, potato, sweet-potatao');
//delimeter


//var_dump($vegetables);

//echo $vegetables[0];

$vegetables = preg_split('/(, |,)/','bringal, brocolli, carrot, capsicam, potato, sweet-potatao,onion,gigger');
print_r($vegetables);

$vegetablesString = join(', ',$vegetables);
echo $vegetablesString;
echo count($vegetables);

//৩.৫ - মাল্টিডাইমেনশনাল বা নেস্টেড অ্যারে
$foods =[
    'vegetables' => explode(', ', 'brinjal, brocolli, carrot, capsicam'),
    'fruits' => explode(', ', 'orange, bannana, apple'),
    'drinks' => explode(', ', 'water, milk')
];
//print_r($foods);

array_push($foods['drinks'],'orange juice');

//print_r($foods);
//echo $foods['vegetables'][1];

$sample = [
    'test' => [
        'test-again' => [
            'a',
            'b',
            'c',
            'd'
        ]
    ],
];

echo $sample['test']['test-again'][2];

$sample2 =[
    [1,2,3,4],
    [11,22,33,44],
    [111,222,333,444],
    [1111,2222,3333,[5,6,7]]
];
print_r($sample2);
echo $sample2[3][3][1];

//৩.৬ - অ্যাসোসিয়েটিভ অ্যারে থেকে স্ট্রিংয়ে কনভার্সন - সিরিয়ালাইজ, জেসন
$student = array(
    'fname' => 'Jamal',
    'lname' => 'Ahmed',
    'age' => '15',
    'class' => 8,
    'section' => 'B',

);
print_r($student);
echo $student['fname']." ".$student['lname']."\n";
printf("%s %s \n",$student['fname'], $student['lname'] );

//echo serialize($student);
$serialized = serialize($student);
echo $serialized;
echo PHP_EOL;
$newStudent = unserialize($serialized);
print_r($newStudent);

$jsonData = json_encode($student);
echo $jsonData;

echo "\n";
$student2 = json_decode($jsonData, true);
print_r($student2);

//৩.৭ - কপি বাই ভ্যালু এবং কপি বাই রেফারেন্স
$person = array('fname' => 'Hello', 'lname' => 'World');
//$newPerson = $person;
$newPerson = &$person;
$newPerson['lname'] = 'Pluto';

print_r($person);
print_r($newPerson);
//copy by value
//deep copy

//copy by reference
//shallow copy

function printData(&$person){
    $person['fname'] .=" Changed";
    print_r($person);
}
printData($person);
print_r($person);
