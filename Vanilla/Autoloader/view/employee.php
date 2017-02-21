<h1>Empoyees:</h1>
<?php
/**
 * Created by PhpStorm.
 * User: goran.erhartic
 * Date: 21/2/2017
 * Time: 9:58 AM
 */

$goran = new Employee("Goran", 31, "PHP", "Onboarding", true);
$niko = new Employee("John Doe", 13, "JS", "ENS", false);
$goran->iterate_properties();
$niko->iterate_properties();
