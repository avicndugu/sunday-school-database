<?php
echo "Today is " . date("Y/m/d") . "";
$day1 = date("Y/m/d");
$day2 = date(2020/02/15);

$diff = $day1 - $day2;

echo date($diff);

?>