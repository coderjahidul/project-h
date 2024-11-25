<?php 
namespace Project;
include "c1.php";
include "c2.php";




$b = new Bike();
echo $b->getName();
echo "\n";

$h = new \Project\Motorcycles\Bike(); // Fully qualified class name
echo $h->getName();
echo "\n";

use \Project\Motorcycles\Bike as Hornet; // alias
$ho = new Hornet();
echo $ho->getName();
echo "\n";

use \Project\Motorcycles\Bike as Tvs; // alias
$tv = new Tvs();
echo $tv->getName();
echo "\n";

use \project\Bike as Pulsar; // alias
$p = new Pulsar();
echo $p->getName();




?>