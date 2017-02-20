<?php
/**
 * Created by PhpStorm.
 * User: goran.erhartic
 * Date: 20/2/2017
 * Time: 11:04 AM
 */

require "autoloader/autoloader.php";

$goran = new Employee("Goran", 31, "PHP");

$goran->iterate_properties();
