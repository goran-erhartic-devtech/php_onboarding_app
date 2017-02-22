<?php
/**
 * Created by PhpStorm.
 * User: goran.erhartic
 * Date: 20/2/2017
 * Time: 11:04 AM
 */

require "autoloader/autoloader.php";
require "name/example/Url_not_found.php";

$router = new Router();

if ($router->get() === "/employees") {
    include_once "view/employees.php";
} elseif ($router->get() === "/managers") {
    include_once "view/managers.php";
} elseif ($router->get() === "/"){
    echo "Hello World";
}

else {
    $name_class = new \name\example\Url_not_found(); //namespace class
    echo $name_class->message();
}