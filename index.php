<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Vehicle.php';
require_once 'Motorway.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'HighWay.php';
require_once 'Speedometer.php';


echo Speedometer::convertKmToMiles(10);

?>
    <br>
<?php


$iveco = new Truck('white', 3, 'fuel', 2200);
$bike = new Bicycle('blue', 1);
$twingo = new Car('blue', 4, 'fuel');
$francilienne = new Motorway();
$treck = new PedestrianWay();
$countrysideRoad = new ResidentialWay();

$bike->switchOn();
if ($bike->switchOn()) {
    echo 'La lumière est allumée';
} else {
    echo 'Il faut pédaler';
}

?>
    <br>
<?php

$bike->forward();
if ($bike->switchOn()) {
    echo 'La lumière est allumée';
} else {
    echo 'Il faut pédaler';
}


?>
    <br>
<?php

$twingo->switchOn();

if ($twingo->switchOn()) {
    echo 'Les phares sont allumés';
}

