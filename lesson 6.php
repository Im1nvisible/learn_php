<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lesson 6</title>
</head>
<body>
<?php

/*$i = 1;
while($i <= 10){
	echo $i . '<br>';
	$i++; // $i = $i + 1; $i += 1;
}*/

/*$i = 1;
echo "<table border=\"1\">\n";
while($i <= 15){
	echo "\t<tr>\n";
	$n = 1;
	while($n <= 5){
		echo "\t\t<td>Row $i | Col - $n</td>\n";
		$n++;
	}
	echo "\t</tr>\n";
	$i++;
}
echo '</table>';*/

/*$year = 1900;
echo '<select>' . "\n";
	while($year <= 2015){
		echo "\t<option value='$year'>$year</option>\n";
		$year++;
	}
echo '</select>';*/

/*$i = 11;
while($i <= 10){
	echo $i++ . '<br>';
}*/

$i = 10;
do{
    echo $i++ . '<br>';
}while($i <= 10);

?>
</body>
</html>