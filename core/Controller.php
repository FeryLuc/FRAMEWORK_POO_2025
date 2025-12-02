<?php

namespace Core;

use \App\Models;

abstract class Controller
{

    protected static $_repository;
    protected static $_records_name;
    protected static $_record_name;

    public static function indexAction(): void
    {
        static::init();
        ${static::$_records_name} = static::$_repository::findAll();
        include '../app/views/' . static::$_records_name . '/index.php';
    }

    public static function showAction(int $id): void
    {
        static::init();
        ${static::$_record_name} = static::$_repository::findOneById($id);
        include '../app/views/' . static::$_records_name . '/show.php';
    }

    public static function init()
    {

        $_root_name = basename(str_replace('\\', '/', static::class), "Controller"); //Authors
        static::$_records_name = strtolower($_root_name);
        static::$_repository = '\App\Models\\' . $_root_name . 'Repository';
        static::$_record_name = substr(static::$_records_name, 0, -1);

        // var_dump(static::$_repository, static::$_records_name, static::$_record_name);
        // die();

    }
}
