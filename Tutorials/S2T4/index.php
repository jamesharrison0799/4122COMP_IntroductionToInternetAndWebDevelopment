<?php

date_default_timezone_set("Europe/London");
header("Content-Type: text/plain");

//Stand alone PHP file
echo "------------ PHP Tests ------------\n";


$tdate = date(DATE_RFC2822);
echo $tdate.PHP_EOL;
//oops

?>