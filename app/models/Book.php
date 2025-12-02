<?php

namespace App\Models;

class Book extends \Core\Model
{

    public  $isbn;
    public  $cover;
    public  $title;
    public  $resume;
    public  $author_id;
    public  $category_id;


    //Liaison
    protected $author;
    protected $category;
    // protected $tags;
}
