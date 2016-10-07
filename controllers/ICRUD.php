<?php

namespace controllers;

interface ICRUD
{
    public function add(array $values);

    public function find($id);

    public function findAll();

    public function update(array $values);

    public function delete($id);
}