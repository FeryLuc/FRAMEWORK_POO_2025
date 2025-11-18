<?php

namespace App\Models;

class Book
{
    public  $id;
    public  $isbn;
    public  $cover;
    public  $title;
    public  $resume;
    public  $author_id;
    public  $category_id;
    public  $created_at;

    public function __construct() {}
}
