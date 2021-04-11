<?php

require_once "Highway.php";

final class MotorWay extends Highway
{
    public function __construct(int $nbLane, int $maxSpeed)
    {
        parent::__construct($nbLane, $maxSpeed);
        $nbLane = 4;
        $maxSpeed = 130;
    }

    public function addVehicle($Vehicle)
    {
        if($Vehicle instanceof Car === true || $Vehicle instanceof Truck === true)
        {
            $this->currentVehicles[] = $Vehicle;
            return "this vehicle is allowed to join this road";
        }
    }
}
