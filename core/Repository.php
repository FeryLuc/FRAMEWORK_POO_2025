<?php

namespace Core;

use \PDO;

abstract class Repository
{
    protected static $_table;
    protected static $_model;


    public static function findAll(int $limit = 9): array
    {
        //static fait référence au class enfant et injecte une copie des protected en temre de propriété.
        static::init();
        $sql = 'SELECT * FROM ' . static::$_table . ' ORDER BY created_at DESC LIMIT :limit';
        $rs = DB::getConnection()->prepare($sql);
        $rs->bindValue(':limit', $limit, PDO::PARAM_INT);
        $rs->execute();

        return $rs->fetchAll(PDO::FETCH_CLASS, static::$_model);
    }
    public static function findOneById(int $id)
    {
        static::init();
        $sql = 'SELECT * FROM ' . static::$_table . ' WHERE id = :id ORDER BY created_at DESC ';
        $rs = DB::getConnection()->prepare($sql);
        $rs->bindValue(':id', $id, PDO::PARAM_INT);
        $rs->execute();
        $rs->setFetchMode(PDO::FETCH_CLASS, static::$_model);

        return $rs->fetch();
    }

    public static function init()
    {
        $root_name = basename(str_replace('\\', '/', static::class), "Repository");
        static::$_table = strtolower($root_name);
        static::$_model = '\App\Models\\' . basename($root_name, 's');
    }
}
