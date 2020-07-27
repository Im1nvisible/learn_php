<?php
//error_reporting(-1);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lesson 7</title>
</head>
<body>
<?php


$arr = array('Ivanov', 'Petrov', 'Sidorov');

//echo "$arr";

$goods = [
    [
        'title' => 'Nokia',
        'price' => 100,
        'description' => 'Description'
    ],
    [
        'title' => 'iPad',
        'price' => 200,
        'description' => 'Description'
    ],
    [
        'title' => 'Sony',
        'price' => 300,
        'description' => 'Description'
    ]
];

/*echo $goods[0]['title'] . ' - ' . $goods[0]['price'];
echo '<br>';
echo $goods[1]['title'] . ' - ' . $goods[1]['price'];*/

$i = 0;
while($i < 3){
    echo $goods[$i]['title'] . ' - ' . $goods[$i]['price'];
    echo '<br>';
    $i++;
}

?>
</body>
</html>