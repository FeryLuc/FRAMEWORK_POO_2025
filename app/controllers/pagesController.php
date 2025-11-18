<?php
namespace App\Controllers;
use \PDO;

abstract class PagesController{

   public static function homeAction(PDO $connection){
    include_once '../app/models/booksModel.php';
    $books = \App\Models\BooksModel\findAll($connection, 3);
    include_once '../app/models/authorsModel.php';
    $authors = \App\Models\AuthorsModel\findAll($connection, 3);

    GLOBAL $content, $title;

    ob_start();
    include '../app/views/pages/home.php';
    $content = ob_get_clean();
}
}

