<?php

error_reporting(-1);

/*
$var = true;
var_dump($var);
echo gettype($var);
*/

/*
$int = 10;
var_dump($int);
*/

/*
$fl = 1.2;
var_dump($fl);
*/

$var = 10;
$str = 'This is \'string\'. $var';

$str2 = "This is \"string\". $var";


$str3 = <<<HERE
This is "string". $var
HERE;

$str4 = <<<'HERE'
This 'is' "string". $var
HERE;

echo $str4;


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lesson 3</title>
</head>
<body>
<?php



?>
</body>
</html>