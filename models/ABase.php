<?php

namespace models;

use components\db\DB;

abstract class ABase
{

    static $db = NULL;
    static $statements = [];

    public function __construct()
    {
        if (is_null(self::$db))
            self::$db = DB::init()->connect();
    }

    function prepareStatement($statement)
    {
        if (isset(self::$statements[$statement]))
            return self::$statements[$statement];
        $stmt_handle = self::$db->prepare($statement);
        self::$statements[$statement] = $stmt_handle;
        return $stmt_handle;
    }

    function doStatement($statement, array $values = [])
    {
//        var_dump($statement);
//        var_dump($values); exit;
        $sth = $this->prepareStatement($statement);
        $sth->closeCursor();
        $sth->execute($values);
        return $sth;
    }

}
 