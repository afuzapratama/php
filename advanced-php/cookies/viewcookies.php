<?php
if (!isset($_COOKIE["user"])) {
    echo "Cookie named user is not set!";
} else {
    echo "Cookie user is set!<br>";
    echo "Value is: " . $_COOKIE['user'];
}

?>

<button><a href="deleteCookie.php">Delete Cookie</a></button>
<button><a href="setCookie.php">Set Cookie</a></button>