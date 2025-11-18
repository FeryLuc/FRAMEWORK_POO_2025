<?php

namespace Core;

use \PDO;
use \PDOException;

abstract class DB
{
    private static $connection = null;

    public static function getConnection()
    {
        if (SELF::$connection == null):
            SELF::setConnection();
        endif;

        return SELF::$connection;
    }
    private static function setConnection()
    {
        try {
            SELF::$connection = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}
