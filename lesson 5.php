<?php

// var_dump( 5 < 3 );
/*if( 5 != 4 ){
	echo 'OK';
}*/
/*if( 5 != 4 ){
	echo 'OK';
	echo '<p>2</p>';
}*/

$light = 'green';
if( $light == 'green' ){
    if( 5 > 3 ){
        echo '<p>5 > 3</p>';
    }
    echo 'We may go';
}elseif( $light == 'yellow' ){
    echo 'We may ready';
}else{
    echo 'We must stop';
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lesson 5</title>
</head>
<body>
<?php



?>
</body>
</html>