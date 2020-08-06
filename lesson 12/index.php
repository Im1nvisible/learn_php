<?php error_reporting(-1);

require_once 'function.php';

$nums = [1,2,3];
$names = ['Ivanov', 'Petrov'];
$names2 = ['Ivan' => 'Ivanov', 'Petr' => 'Petrov'];
$test = [];

$keys = array_keys($nums);
print_r($keys);

$keys2 = my_array_keys($nums);
print_r($keys2);
$keys3 = my_array_keys($test);
print_r($keys3);

sum(5,7);
sum(10,5);
sum(5,17);

/*$res = sum(1,2);
echo $res;*/

// echo sum(1,2);