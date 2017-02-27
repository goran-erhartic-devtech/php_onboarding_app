<?php

/**
 * Created by PhpStorm.
 * User: goran.erhartic
 * Date: 23/2/2017
 * Time: 9:21 AM
 */
class Router
{
    private $full_url;
    private $all = array();

    public function __construct()
    {
        $this->full_url = $_SERVER['REQUEST_URI'];
    }

    /**
     * @return string
     */
    public function parseId()
    {
        $id = '';
        if (isset(explode('/', $_SERVER['REQUEST_URI'])[2])) {
            $id = explode('/', $_SERVER['REQUEST_URI'])[2];
        }
        return $id;
    }

    /**
     * @param $uri_path
     * @param $handler
     * @return mixed
     */
    public function get($uri_path, $handler)
    {
        if (strpos($uri_path, '{id}') !== false) {
            $uri_path = str_replace("{id}", $this->parseId(), $uri_path);
        }
        return $this->all[$uri_path] = $handler;
    }

    public function execute()
    {
        $id = $this->parseId();

        if (array_key_exists($_SERVER['REQUEST_URI'], $this->all)) {
            if (isset($id)) {
                return $this->all[$_SERVER['REQUEST_URI']]($id);
            } else {
                return $this->all[$_SERVER['REQUEST_URI']]();
            }
        } else {
            echo 'DAMN... 404';
        }
        return false;
    }

}

$router = new Router();

$router->get('/managers', function () {
    $aa = new \GE\Person\Manager("Goran", 31, array("one", "two", "three"));
    echo $aa->iterateProperties();
});

$router->get('/manager/{id}', function ($id) {
    echo "This will return Manager with this id: $id";
});

$router->get('/employees', function () {
    $aa = new \GE\Person\Employee("Igor", 33, "PHP", "Onboarding", true);
    echo $aa->iterateProperties();
});

$router->get('/employee/{id}', function ($id) {
    echo "This will return Employee with this id: $id";
});

$router->get('/', function () {
    echo 'WELCOME';
});

$router->execute();