<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lesson 8</title>
</head>
<body>
<?php

$arr = ['Ivanov', 'Petrov', 'Sidorov'];

// $arr[3] = 'Pupkin';
$arr[] = 'Pupkin';
$arr[] = 'Doe';
print_r($arr);

$names = [
    'Ivan' => 'Ivanov',
    'Petr' => 'Petrov',
    'Sidor' => 'Sidorov',
];
// print_r($names);
/*$i = 1;
while( $i < 11 ){
	echo $i . "<br>";
	$i++;
}*/

/*for($i = 1; $i < 11; $i++){
	echo $i . "<br>";
}*/

for($i = 0; $i < count($arr); $i++ ){
    echo $arr[$i] . '<br>';
}

echo '<select>';
for ($i = 1900; $i <= 2020; $i++){
    echo '<option>$i</option>';
}
echo '</select>';

?>
</body>
</html>