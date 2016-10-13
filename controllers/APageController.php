<?php

namespace controllers;

use components\request\RequestRegistry;

abstract class APageController
{

    protected $view = '';
    protected $data = [];
    public $layout = 'admin.php';

    const INCLUDED_PAGE = true;

    /**
     * APageController constructor.
     */
    public function __construct()
    {
        $this->auth();
    }


    abstract function process();
    
    function forward($resource, $includedPage = false)
    {
        if ((strpos(RequestRegistry::getRequest()->getServer()['REQUEST_URI'], 'admin') === false)
            || $includedPage) {
            echo $this->display($resource);
        } else {
            $this->view = $resource;
            echo $this->display(dirname(__DIR__) . '/views/admin/layouts/admin.php');
        }
    }

    function getRequest()
    {
        return RequestRegistry::getRequest();
    }

    /**
     * @param $view
     * @return string
     */
    public function display($view)
    {
        ob_start();
        include $view;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    protected function auth()
    {
        if (!isset(RequestRegistry::getRequest()->getServer()['PHP_AUTH_USER'])) {
            header("Content-Type: text/html; charset=utf-8");
            header('WWW-Authenticate: Basic realm="My Realm"');
            header('HTTP/1.0 401 Unauthorized');
            echo 'Для управления сайтом необходимо авторизоваться';
            exit;
        }
    }

    function __get($name)
    {
        return $this->data[$name] ?: null;
    }

    function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    function __isset($name)
    {
        return isset($this->data[$name]);
    }


}
 