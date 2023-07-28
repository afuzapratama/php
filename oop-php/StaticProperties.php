<?php
//A class can have both static and non-static properties. A static property can be accessed from a method in the same class using the self keyword and double colon (::)

class pi
{
    public static $value = 3.14159;
    public function staticValue()
    {
        return self::$value;
    }
}

$pi = new pi();
echo $pi->staticValue();


// class pi
// {
//     public static $value = 3.14159;
// }

// class x extends pi
// {
//     public function xStatic()
//     {
//         return parent::$value;
//     }
// }

// // Get value of static property directly via child class
// echo x::$value;

// // or get value of static property via xStatic() method
// $x = new x();
// echo $x->xStatic();