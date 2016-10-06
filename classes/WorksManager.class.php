<?php

class WorksManager implements ICRUD
{

//    static $add = 'INSERT INTO news (title, description, image, body, created_time) VALUES (?, ?, ?, ?, NOW())';
//    static $find = 'SELECT * FROM news WHERE id = ?';
//    static $findAll = 'SELECT * FROM news ORDER BY created_time DESC';
//    static $update = '';
//    static $delete = 'DELETE FROM news WHERE id = ?';/**

    private $json;


    /**
     * @param array $values
     * @return mixed
     */
    public function add(array $values)
    {
        // TODO: Implement add() method.
    }

    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        // TODO: Implement find() method.
    }

    /**
     * @return mixed
     */
    public function findAll()
    {
        return json_decode(file_get_contents(dirname(__DIR__) . '/js/cakes.json'));
    }

    /**
     * @param array $values
     * @return mixed
     */
    public function update(array $values)
    {
        // TODO: Implement update() method.
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function setWorksJson() {
        return file_put_contents(dirname(__DIR__) . '/js/cakes.json', $this->json);
    }

}
 