<?php

namespace App\Controllers;

use \App\Models\AuthorsRepository;

abstract class AuthorsController
{
    public static function indexAction(): void
    {
        $authors = AuthorsRepository::findAll();
        global $content, $title;
        ob_start();
        include '../app/views/authors/_index.php';
        $content = ob_get_clean();
    }
    public static function showAction(int $id): void
    {
        $author = AuthorsRepository::findOneById($id);
        global $content, $title;
        $title = $author->firstname;
        ob_start();
        include '../app/views/authors/show.php';
        $content = ob_get_clean();
    }
}
