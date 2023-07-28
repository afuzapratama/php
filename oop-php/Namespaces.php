<?php
// They allow for better organization by grouping classes that work together to perform a task
// They allow the same name to be used for more than one class



// This is the class that will be used to perform the task

//syntax:

// namespace Html;


//A namespace declaration must be the first thing in the PHP file. The following code would be invalid:

// echo "Hello World!";
// namespace Html;


// namespaces adalah kualifikasi yang memecahkan dua masalah berbeda:

//     Mereka memungkinkan organisasi yang lebih baik dengan mengelompokkan kelas yang bekerja bersama untuk melakukan tugas
//     Mereka mengizinkan nama yang sama digunakan untuk lebih dari satu kelas
//     Misalnya, Anda mungkin memiliki satu set kelas yang mendeskripsikan tabel HTML, seperti Tabel, Baris, dan Sel sementara juga memiliki satu set kelas lain untuk mendeskripsikan furnitur, seperti Meja, Kursi, dan Tempat Tidur. Ruang nama dapat digunakan untuk mengatur kelas menjadi dua grup yang berbeda sambil juga mencegah dua kelas Tabel dan Tabel tercampur.
// example
namespace Html;

class Table
{
    public $title = "";
    public $numRows = 0;
    public function message()
    {
        echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
    }
}
$table = new Table();
$table->title = "My table";
$table->numRows = 5;
?>

<!DOCTYPE html>
<html>

<body>

    <?php
    $table->message();
    ?>

</body>

</html>