<?php
//Example 1

class Goodbye
{
    const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
}

echo Goodbye::LEAVING_MESSAGE;

// class constant can be accessed from outside the class using the class name followed by the scope resolution operator (::) followed by the constant name, like here:

class Helloworld
{
    const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
    public function byebye()
    {
        echo self::LEAVING_MESSAGE; // prints "Thank you for visiting W3Schools.com!"
    }
}

$goodbye = new Helloworld();
$goodbye->byebye();
