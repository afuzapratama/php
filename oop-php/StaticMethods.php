<?php
//PHP - Static Methods
// Static methods can be called directly - without creating an instance of the class first.

// Static methods are declared with the static keyword:

//syntax:
// class ClassName
// {
//     public static function staticMethod()
//     {
//         echo "Hello World!";
//     }
// }

//To access a static method use the class name, double colon (::), and the method name:

// ClassName::staticMethod();

//Example 1

class greeting
{
    public static function welcome()
    {
        echo "Hello World!";
    }
}

// Call static method
greeting::welcome();

//Here, we declare a static method: welcome(). Then, we call the static method by using the class name, double colon (::), and the method name (without creating an instance of the class first).


//Example 2
class A
{
    public static function welcome()
    {
        echo "Hello World!";
    }
}

class B
{
    public function message()
    {
        A::welcome();
    }
}

$obj = new B();
echo $obj->message();
