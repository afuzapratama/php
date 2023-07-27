<?php
// $GLOBALS
// $_SERVER
// $_REQUEST
// $_POST
// $_GET
// $_FILES
// $_ENV
// $_COOKIE
// $_SESSION


// $GLOBALS
// $GLOBALS is a PHP super global variable which is used to access global variables from anywhere in the PHP script (also from within functions or methods).

$x = 10;
$y = 20;

function add()
{
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}


add();

echo $GLOBALS['z'];
echo "<br>";

// $_SERVER
// $_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.

$_SERVER['PHP_SELF'] = '/index.php';
//https://www.w3schools.com/php/php_superglobals_server.asp
echo $_SERVER['PHP_SELF'];
echo "<br>";



// $_REQUEST
// $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form.

$_REQUEST['name'] = 'John';

echo $_REQUEST['name'];
echo "<br>";

// $_POST
// $_POST is a PHP super global variable which is used to collect form data after submitting an HTML form with method="post".

$_POST['name'] = 'John';

echo $_POST['name'];
echo "<br>";


// $_GET
// $_GET is a PHP super global variable which is used to collect form data after submitting an HTML form with method="get".

$_GET['name'] = 'John';

echo $_GET['name'];
echo "<br>";


// $_FILES
// $_FILES is a PHP super global variable which is used to collect form data after submitting an HTML form with enctype="multipart/form-data".

$_FILES['name'] = 'John';

echo $_FILES['name'];
echo "<br>";


// $_ENV
// $_ENV is a
$_ENV['name'] = 'John';

echo $_ENV['name'];
echo "<br>";


// $_COOKIE

$_COOKIE['name'] = 'John';

echo $_COOKIE['name'];
