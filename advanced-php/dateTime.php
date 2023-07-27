<?php

//exmple 1
echo date('d'); // Day
echo date('m'); // Month
echo date('Y'); // Year
echo date('l'); // Day of the week

echo "&copy; 2010-" . date('Y') . "<br>";

//Get Your Time Zone
date_default_timezone_set("America/New_York"); // Set time zone
echo "The time is " . date("h:i:sa");

echo "<br>";
//Create a Date With mktime()

$d = mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);

//Create a Date From a String With strtotime()
echo "<br>";
$d = strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);

// example 2 looping
$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
    echo date("M d", $startdate) . "<br>";
    $startdate = strtotime("+1 week", $startdate);
}

//example 3
$d1 = strtotime("July 04");
$d2 = ceil(($d1 - time()) / 60 / 60 / 24);
echo "There are " . $d2 . " days until 4th of July.";
