<?php

require_once "Highway.php";
final class PedestrianWay extends Highway
{
    public function __construct(int $nbLane, int $maxSpeed)
    {
        parent::__construct($nbLane = 1, $maxSpeed = 10);
    }

    public function addVehicle($Vehicle):void
    {
        if($Vehicle === "Bike" || $Vehicle ==="Skateboard")
        {
            $this->currentVehicles[] = $Vehicle;
        }
    }
}