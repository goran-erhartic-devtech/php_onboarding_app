<?php
/**
 * Created by PhpStorm.
 * User: goran.erhartic
 * Date: 23/2/2017
 * Time: 8:50 AM
 */
require_once(__DIR__ . '/../bootstrap/bootstrap.php');

$router = new Router();

$router->get('/managers', function () {
    $aa = new \GE\Person\Manager();
    $aa->setName("Goran")->setAge(31)->setProject(array("one", "two", "three"));
    echo $aa->iterateProperties();
});

$router->get('/manager/{id}', function ($id) {
    echo "This will return Manager with this id: $id";
});

$router->get('/employees', function () {
    $aa = new \GE\Person\Employee();
    $aa->setName("Igor")->setAge(33)->setDepartment('PHP')->setIsActive(true)->setProject("Onboarding");
    echo $aa->iterateProperties();
});

$router->get('/employee/{id}', function ($id) {
    echo "This will return Employee with this id: $id";
});

$router->get('/', function () {
    echo 'WELCOME';
});

$router->execute();