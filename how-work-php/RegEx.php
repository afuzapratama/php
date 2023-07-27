<?php

//preg_match() - Perform a regular expression match

$str = "Hello World";

$result = preg_match("/Hello/", $str);

echo $result;
echo "<br>";

//preg_match_all() - Perform a regular expression match and return all matches

$str = "Hello World";

$result = preg_match_all("/Hello/", $str, $matches);

echo $result;

echo "<br>";

//preg_replace() - Perform a regular expression replace

$str = "Hello World";

$result = preg_replace("/Hello/", "Hi", $str);

echo $result;

//exaple 
$str = "Apples and bananas.";
$pattern = "/ba(na){2}/i";
echo preg_match($pattern, $str); // Outputs 1