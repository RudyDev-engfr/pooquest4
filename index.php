<?php

require_once "Bicycle.php";
require_once "Car.php";
require_once "Truck.php";
require_once "MotorWay.php";
require_once "PedestrianWay.php";
require_once "ResidentialWay.php";


// $bike = new Bicycle ("Yellow", 1);
// var_dump($bike);

// // Moving bike


// var_dump($bike); // then, another dump.

// echo $bike->forward();

// echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';

// echo $bike->brake();

// echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';

// echo $bike->brake();

// // Instanciation d'un nouvel objet $rockrider

// $rockrider = new Bicycle("Red", 1);

// $rockrider->setColor = 'yellow';


// // Instanciation d'un nouvel objet $tornado

// $tornado = new Bicycle("Black", 1);

// $tornado->setColor = 'black';


// $tornado->forward();




// Les voitures VROUM VROUM VROUM !!! 

$viper = new Car("Red with two white strips", 2, "Diesel");
$viper->getCurrentSpeed();
var_dump($viper);
$viper->setParkBrake();
try{
    echo $viper->start() . "<br>";
}
catch(Exception $e){
    echo "Exception Received :" . $e->getMessage();
} finally {
    echo "Ma voiture roule comme un donut";
}


echo $viper->forward() . "<br>";
echo $viper->brake() . "<br>";
echo $viper->stop() . "<br>";

// $kaamthar = new Truck (1000, "Black with flames", 2, "fuel");
// echo $kaamthar->start() . "<br>";
// echo $kaamthar->forward() . "<br>";
// echo $kaamthar->brake() . "<br>";
// echo $kaamthar->stop() . "<br>";
// echo $kaamthar->loadingStatement();

// $autoroute = new MotorWay(4, 130);
// $parc = new PedestrianWay(1, 10);
// $ruedelapaix = new ResidentialWay(2, 50);

// var_dump($autoroute);
// var_dump($parc);
// var_dump($ruedelapaix);

// echo $autoroute->addVehicle($viper);
// var_dump($autoroute); // le véhicule est bien ajouté à la voie

