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

    //Liaison
    private $author;
    private $category;

    public function __construct() {}
    //LANCEE uniquement quand on tente, quelque part, d'accéder à une propriété private, protected ou inexistante.
    public function __get(string $propName)
    {

        $methodName = 'set' . ucfirst($propName);
        if (method_exists($this, $methodName)):
            $this->$methodName($propName);
            return $this->$propName;
        endif;
        return true; //c'est un getter donc mettre un return général.
    }


    public function setAuthor(string $prop)
    {
        if (!$this->author):
            $this->$prop = AuthorsRepository::findOneByid($this->author_id);
        endif;
    }
    public function setCategory(string $prop)
    {
        if (!$this->category):
            $this->$prop = CategoriesRepository::findOneByid($this->category_id);
        endif;
    }
}
