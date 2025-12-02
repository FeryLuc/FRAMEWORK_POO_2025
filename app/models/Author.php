<?php

namespace App\Models;

class Author extends \Core\Model
{
    public  $firstname;
    public  $lastname;
    public  $biography;
    public  $picture;

    //Pour avoir les livres qui concerne un auteur
    // protected $books;
}
