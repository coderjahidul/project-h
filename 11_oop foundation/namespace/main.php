<?php 
namespace Astronomy; // namespace
include "planet.php"; // include
include "earth.php"; // include


// $planet = new Planets\Planet(); // Unqualified class name
$planet = new \Astronomy\Planets\Planet(); // Fully qualified class name
echo $planet->getName();
echo "\n";
$earth = new \Astronomy\Planets\Earth(); // Fully qualified class name
echo $earth->getName();










?>