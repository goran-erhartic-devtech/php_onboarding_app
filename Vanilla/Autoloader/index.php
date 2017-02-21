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

if ($router->get() === "/employee") {
    include_once "view/employee.php";
} elseif ($router->get() === "/manager") {
    echo "Instantiate a Manager class";
} elseif ($router->get() === "/"){
    echo "Hello World";
}

else {
    $name_class = new \name\example\Url_not_found(); //namespace class
    echo $name_class->message();
}
