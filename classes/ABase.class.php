<?php

 abstract class ABase {

     static $db         = NULL;
     static $statements = [];

     public function __construct() {
         if (is_null($this->db))
             self::$db = DB::init()->connect();
     }

     function prepareStatement($statement) {
         if (isset(self::$statements[$statement]))
             return self::$statements[$statement];
         $stmt_handle                  = self::$db->prepare($statement);
         self::$statements[$statement] = $stmt_handle;
         return $stmt_handle;
     }

     function doStatement($statement, array $values = []) {
         $sth       = $this->prepareStatement($statement);
         $sth->closeCursor();
//         Helper::g($values); exit;
         $db_result = $sth->execute($values);
         return $sth;
     }

 }
 