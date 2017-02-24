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
     * @param $uri_path
     * @param $handler
     * @return mixed
     */
    public function get($uri_path, $handler)
    {
        return $this->all[$uri_path] = $handler;
    }

    public function execute()
    {
        if (array_key_exists($_SERVER['REQUEST_URI'], $this->all)) {
            return $this->all[$_SERVER['REQUEST_URI']]();
        } else {
            echo 'DAMN... 404';
        }
        return false;
    }

}

$router = new Router();

$router->get('/managers', function () {
    $aa = new \src\GE\Person\Manager("Goran", 31, array("one", "two", "three"));
    echo $aa->iterateProperties();
});

$router->get('/employees', function () {
    $aa = new \src\GE\Person\Employee("Igor", 33, "PHP", "Onboarding", true);
    echo $aa->iterateProperties();
});

$router->get('/', function () {
    echo 'WELCOME';
});

$router->execute();