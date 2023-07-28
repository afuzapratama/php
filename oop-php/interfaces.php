<?php

//What are Interfaces?

// Antarmuka memungkinkan Anda untuk menentukan metode apa yang harus diterapkan kelas.

// Antarmuka memudahkan untuk menggunakan berbagai kelas yang berbeda dengan cara yang sama. Ketika satu atau lebih kelas menggunakan antarmuka yang sama, ini disebut sebagai "polimorfisme".

// Antarmuka dideklarasikan dengan interface keyword:

interface InterfaceName
{
    public function someMethod1();
    public function someMethod2($name, $color);
    public function someMethod3(): string;
}

//Interfaces vs. Abstract Classes
// Antarmuka mirip dengan kelas abstrak. Perbedaan antara antarmuka dan kelas abstrak adalah:

// Antarmuka tidak bisa memiliki properti, sedangkan kelas abstrak bisa
// Semua metode antarmuka harus bersifat publik, sedangkan metode kelas abstrak bersifat publik atau dilindungi
// Semua metode dalam antarmuka bersifat abstrak, sehingga tidak dapat diimplementasikan dalam kode dan kata kunci abstrak tidak diperlukan
// Kelas dapat mengimplementasikan antarmuka sambil mewarisi dari kelas lain pada saat yang sama

// interface Animal
// {
//     public function makeSound();
// }

// class Cat implements Animal
// {
//     public function makeSound()
//     {
//         echo "Meow";
//     }
// }

// $animal = new Cat();
// $animal->makeSound();


// example 2

// Interface definition
// Interface definition
interface Animal
{
    public function makeSound();
}

// Class definitions
class Cat implements Animal
{
    public function makeSound()
    {
        echo " Meow ";
    }
}

class Dog implements Animal
{
    public function makeSound()
    {
        echo " Bark ";
    }
}

class Mouse implements Animal
{
    public function makeSound()
    {
        echo " Squeak ";
    }
}

// Create a list of animals
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

// Tell the animals to make a sound
foreach ($animals as $animal) {
    $animal->makeSound();
}
