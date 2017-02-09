<?php

class Db
{
    public static $connection;

    private function __construct()
    {
    }

    private function __wakeup()
    {
    }

    private function __clone()
    {
    }

    public static function get_connection()
    {

        if (self::$connection === null) {
            self::$connection = new PDO("mysql:host=" . DB_HOST_NAME . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        }
        return self::$connection;
    }

    public static function execute($query)
    {
        $connection = self::get_connection();
        $status = $connection->exec($query);
        if ($status === false) {
            $error = $connection->errorInfo();            
            die();
        }
        return $status;
    }

    public static function query($query)
    {
        $connection = self::get_connection();
        $get_data = $connection->query($query);
        if ($get_data === false) {
            $error = $connection->errorInfo();
            die();
        }
        $records = $get_data->fetchAll(PDO::FETCH_ASSOC);
        return $records;
    }
}
