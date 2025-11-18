<?php

namespace App\Models;

class Author
{
    public  $id;
    public  $firstname;
    public  $lastname;
    public  $biography;
    public  $picture;
    public  $created_at;

    public function __construct() {}
}
