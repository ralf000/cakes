<?php

namespace models;

use PDO;

class AdminManager extends AManager
{

    static $add = 'INSERT INTO news (title, description, image, body, created_time) VALUES (?, ?, ?, ?, NOW())';
    static $find = 'SELECT * FROM news WHERE id = ?';
    static $findAll = 'SELECT * FROM news ORDER BY created_time DESC';
    static $update = '';
    static $delete = 'DELETE FROM news WHERE id = ?';

    private function updateQuery(array $array)
    {
        $str = 'UPDATE news SET ';
        foreach ($array as $key) {
            if ($key !== 'id')
                $str .= "$key=?,";
        }
        $str = substr($str, 0, -1) . ' WHERE id = ?';
        self::$update = $str;
        return self::$update;
    }

    function add(array $values)
    {
        return $this->doStatement(self::$add, $values);
    }

    function find($id)
    {
        return $this->doStatement(self::$find, [$id])->fetch(PDO::FETCH_ASSOC);
    }

    function findAll()
    {
        return $this->doStatement(self::$findAll)->fetchAll(PDO::FETCH_ASSOC);
    }

    function update(array $values)
    {
        $updateQuery = $this->updateQuery(array_keys($values));
        return $this->doStatement($updateQuery, $this->getValsFromArray($values));
    }

    function delete($id)
    {
        return $this->doStatement(self::$delete, [$id]);
    }

    private function getValsFromArray(array $array)
    {
        $result = [];
        foreach ($array as $a) {
            $result[] = $a;
        }
        return $result;
    }

}
 