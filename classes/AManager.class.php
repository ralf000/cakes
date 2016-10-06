<?php


class AManager extends ABase implements ICRUD
{

    public function add(array $values) {
        return $this->doStatement(static::$add, $values);
    }

public function find($id) {
        return $this->doStatement(static::$find, [$id])->fetch(PDO::FETCH_ASSOC);
    }

public function findAll() {
        return $this->doStatement(static::$findAll)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update(array $values) {
        $updateQuery = $this->updateQuery(array_keys($values));
        return $this->doStatement($updateQuery, $this->getValsFromArray($values));
    }

    function delete($id){
        return $this->doStatement(static::$delete, [$id]);
    }

    private function updateQuery(array $array) {
        $str = 'UPDATE news SET ';
        foreach ($array as $key) {
            if ($key !== 'id')
                $str .= "$key=?,";
        }
        $str          = substr($str, 0, -1) . ' WHERE id = ?';
        static::$update = $str;
        return static::$update;
    }

    private function getValsFromArray(array $array) {
        $result = [];
        foreach ($array as $a) {
            $result[] = $a;
        }
        return $result;
    }
}