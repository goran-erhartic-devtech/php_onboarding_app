<?php
/**
 * Created by PhpStorm.
 * User: goran.erhartic
 * Date: 20/2/2017
 * Time: 10:30 AM
 */

spl_autoload_register(function ($class) {
    $filename = $_SERVER['DOCUMENT_ROOT'] . '\classes' . '\\' . $class . '.php';
    if (!file_exists($filename)) {
        return false;
    }
    include $filename;
    return true;
});