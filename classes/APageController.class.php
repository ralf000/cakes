<?php

abstract class APageController
{

    protected $view = '';
    protected $data = [];
    public $layout = 'admin.php';

    abstract function process();

    function forward($resource)
    {
        if ((strpos(RequestRegistry::getRequest()->getServer()['REQUEST_URI'], 'admin') === false)) {
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
 