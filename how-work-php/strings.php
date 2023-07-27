<?php

echo strlen("Hello world!"); // Return the Length of a String
echo "<br>";
echo str_word_count("Hello world!"); // Count Words in a String
echo "<br>";
var_dump(str_split("Hello world!")); // Split a String into an Array
echo "<br>";
echo strrev("Hello world!"); // Reverse a String
echo "<br>";
echo strpos("Hello world!", "world"); // Search For a Text Within a String
echo "<br>";
echo str_replace("world", "Dolly", "Hello world!"); // Replace Text Within a String
echo "<br>";
echo str_ireplace("world", "Dolly", "Hello world!"); // Replace Text Within a String
echo "<br>";
echo substr("Hello world!", 0, 5); // Return a Substring
echo "<br>";
echo substr_count("Hello world!", "l"); // Count Substrings
echo "<br>";
echo substr_compare("Hello world!", "l", 0, 5); // Compare Substrings
echo "<br>";
