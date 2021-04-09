<?php

require_once "Vehicle.php";
class Car extends Vehicle
{
    private int $fuelLevel = 40;


    public function __construct(string $color, int $seatNb, string $energy)
    {
        parent::__construct($color, $seatNb);
        $this->setEnergy($energy);
    }


    /**
     * Get the value of fuelLevel
     */
    public function getFuelLevel(): int
    {
        return $this->fuelLevel;
    }


    /**
     * Set the value of fuelLevel
     *
     * @return  self
     */
    public function setFuelLevel($fuelLevel): self
    {
        $this->fuelLevel = $fuelLevel;

        return $this;
    }



}
