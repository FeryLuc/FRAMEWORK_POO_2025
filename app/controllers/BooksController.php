<?php

namespace App\Controllers;

use \App\Models\BooksRepository;

abstract class BooksController
{
    public static function indexAction()
    {
        $books = BooksRepository::findAll();
        global $content, $title;
        ob_start();
        include '../app/views/books/_index.php';
        $content = ob_get_clean();
    }
    public static function showAction(int $id)
    {
        $book = BooksRepository::findOneById($id);
        global $content, $title;
        $title = $book->title;
        ob_start();
        include '../app/views/books/show.php';
        $content = ob_get_clean();
    }
}
