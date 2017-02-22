<?php

/**
 * Created by PhpStorm.
 * User: goran.erhartic
 * Date: 21/2/2017
 * Time: 9:23 AM
 */

class Router
{

    private $full_url;

    public function __construct()
    {
        $this->full_url = $_SERVER['REQUEST_URI'];
    }

    public function get()
    {
        return $this->full_url;
    }
}