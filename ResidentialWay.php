<?php
require_once "Highway.php";

final class ResidentialWay extends Highway
{
    public function __construct(int $nbLane, int $maxSpeed)
    {
        parent::__construct($nbLane = 2, $maxSpeed = 50);
    }

    public function addVehicle($Vehicle):void
    {
        $this->currentVehicles[] = $Vehicle;
    }
}