<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home work 1</title>
</head>
<body>
<?php

$i = 1;
echo "<table border=\"1\">\n";
while($i <= 10){
	echo "\t<tr>\n";
	$n = 1;
	while($n <= 10){
		echo "\t\t<td>".$i * $n."</td>\n";
		$n++;
	}
	echo "\t</tr>\n";
	$i++;
}
echo '</table>';

$x =1;
echo "<table border='1'>\n";
while ($x <= 10){
    echo "\t<tr>\n";
    $y = 1;
    while ($y <= 10){
        echo "\t\t<td>$x * $y = " . $x * $y . "</td>\n";
        $y++;
    }
    echo "\t</tr>\n";
    $x++;
}
echo '</table>';

?>
</body>
</html>