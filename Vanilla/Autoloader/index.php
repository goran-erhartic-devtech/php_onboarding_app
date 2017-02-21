<?php
/**
 * Created by PhpStorm.
 * User: goran.erhartic
 * Date: 20/2/2017
 * Time: 11:04 AM
 */

require "autoloader/autoloader.php";
$router = new Router();

if ($router->get() === "/employee") {
    include_once "view/employee.php";
}elseif($router->get() === "/manager"){
    echo "Instantiate a Manager class";
}else{
    echo 404;
}