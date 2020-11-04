<?php error_reporting(-1);

header('Content-Type: text/html; charset=utf-8');

/*
DateTime date_create ([ string $time = "now" [, DateTimeZone $timezone = NULL ]] )
DateTime date_add ( DateTime $object , DateInterval $interval )
string date_format ( DateTimeInterface $object , string $format )
date_interval_create_from_date_string()
DateInterval date_diff ( DateTimeInterface $datetime1 , DateTimeInterface $datetime2 [, bool $absolute = false ] )
*/

$date = date_create(date('Y-m-d H:i:s'));
var_dump($date);
echo date_format($date, 'Y-m-d H:i:s');
date_add($date, date_interval_create_from_date_string('2 days + 2 hours + 10 minutes + 5 seconds'));
echo '<br>';
echo date_format($date, 'Y-m-d H:i:s');

echo time();
echo '<br>';
echo microtime();
//var_dump(microtime(true));


$start = microtime(true);
// usleep(1000000);

for($i = 1; $i <= 1000000000; $i++){
    if($i == 1000000000) echo '<p>Отсчет завершен</p>';
}

$end = microtime(true);
echo $end - $start;