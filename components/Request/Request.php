<?php

namespace components\request;

class Request
{

    private $properties;
    private $server;
    private $feedback = [];


    public function __construct()
    {
        $this->init();
    }

    function init()
    {
        $this->server = $_SERVER;
        if (isset($_SERVER['REQUEST_METHOD'])) {
            $this->properties = $_REQUEST;
            return;
        }
    }

    function getProperty($key)
    {
        if (isset($this->properties[$key]))
            return $this->properties[$key];
        return null;
    }

    function setProperty($key, $val)
    {
        $this->properties[$key] = $val;
    }

    function addFeedback($msg)
    {
        array_push($this->feedback, $msg);
    }

    function getFeedback()
    {
        return $this->feedback;
    }

    function getFeedbackString($separator = "\n")
    {
        return implode($separator, $this->feedback);
    }

    function getProperties()
    {
        return $this->properties;
    }

    /**
     * @return mixed
     */
    public function getServer()
    {
        return $this->server;
    }


}
 