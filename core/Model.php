<?php

namespace Core;

abstract class Model
{
    public $id;
    public $created_at;

    //LANCEE uniquement quand on tente, quelque part, d'accéder à une propriété private, protected ou inexistante.
    public function __get(string $propName)
    {
        $this->setField($propName);
        return $this->$propName;
    }

    public function setField(string $fieldName)
    {
        $fieldWithoutY = (str_ends_with($fieldName, 'y')) ? substr($fieldName, 0, -1) . 'ie' : $fieldName;

        $repository = '\App\Models\\' . ucfirst($fieldWithoutY) . 'sRepository';

        $fk = $fieldName . '_id';

        if (!$this->category):
            $this->$fieldName = $repository::findOneByid($this->$fk);
        endif;
    }
}
