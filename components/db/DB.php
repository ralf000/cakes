<?php

namespace components\db;

use Exception;
use PDO;

Class DB
{

    private $dbConfig;
    private static $_instance = NULL;
    private static $_db = NULL;

    private function __construct()
    {
        if (self::$_db === NULL) {
            try {
                $this->dbConfig = parse_ini_file(dirname(__DIR__) . '/../security/db.ini');
                $dsn = "mysql:host=" . $this->dbConfig['dbHost'] . ";dbname=" . $this->dbConfig['dbName'];
                $options = [
                    PDO::ATTR_ERRMODE => true,
                    PDO::ERRMODE_EXCEPTION => true,
                ];
                self::$_db = new PDO($dsn, $this->dbConfig['dbUser'], $this->dbConfig['dbPass'], $options);
            } catch (Exception $ex) {
                echo $ex->getMessage();
            }
        }
    }

    public static function init()
    {
        self::$_instance = new self;
        return self::$_instance;
    }

    public function connect()
    {
        return self::$_db;
    }

    final private function __clone()
    {

    }

    final private function __sleep()
    {

    }

    final private function __wakeup()
    {

    }

}
 