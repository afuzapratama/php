<?php

// Arithmetic operators
// Assignment operators
// Comparison operators
// Increment/Decrement operators
// Logical operators
// String operators
// Array operators
// Conditional assignment operators



// Arithmetic operators

$a = 10;
$b = 20;
$c = $a + $b;
$d = $a - $b;
$e = $a * $b;
$f = $a / $b;
$g = $a % $b;
$h = $a ** $b;

echo $c; // 30


// Assignment operators

$a = 10;
$b = 20;
$c = $a += $b;
$d = $a -= $b;
$e = $a *= $b;
$f = $a /= $b;
$g = $a %= $b;
$h = $a **= $b;


echo $c; // 30


// Comparison operators

$a = 10;
$b = 20;
$c = $a > $b;
$d = $a < $b;
$e = $a >= $b;
$f = $a <= $b;
$g = $a === $b;
$h = $a !== $b;
$i = $a <=> $b;
$j = $a == $b;
$k = $a <> $b;
$l = $a != $b;


var_dump($c); // false

// Increment/Decrement operators

$a = 10;
$b = 20;
$c = $a++;
$d = $a--;
$e = ++$a;
$f = --$a;

echo $c; // 11


// Logical operators

$a = 10;
$b = 20;
$c = $a && $b;
$d = $a || $b;
$e = !$a;
$f = !!$a;
$g = $a ?: $b;
$h = $a ? $b : $c;
$i = $a  and $b;
$j = $a  or $b;
$k = $a  xor $b;

var_dump($c); // false

// String operators

$a = "Hello";
$b = "World";
$c = $a . $b;
$d = $a .= $b;

echo $c; // HelloWorld


// Array operators

$a = [1, 2, 3];
$b = [4, 2, 6];
$c = $a + $b;
$d = $a == $b;
$e = $a != $b;
$f = $a === $b;
$g = $a !== $b;
$j = $a <> $b;

var_dump($f); // false


// Conditional assignment operators

$a = 10;
$b = 20;
$c = $a ?? $b;

echo $c; // 20