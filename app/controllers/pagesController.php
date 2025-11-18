<?php

namespace App\Controllers;

use \PDO;
use \App\Models\BooksRepository;

abstract class PagesController
{

    public static function homeAction(PDO $connection)
    {
        $books = BooksRepository::findAll($connection, 3);
        include_once '../app/models/authorsModel.php';
        $authors = \App\Models\AuthorsModel\findAll($connection, 3);

        global $content, $title;

        ob_start();
        include '../app/views/pages/home.php';
        $content = ob_get_clean();
    }
}
