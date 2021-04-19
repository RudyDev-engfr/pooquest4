<?php

require_once "Vehicle.php";
class Car extends Vehicle
{
    private int $fuelLevel = 40;
    private bool $hasParkBrake;


    public function setParkBrake(bool $hasParkBrake = true): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

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

    public function start() //démarrer
{
    $startingNoise = "";
    if ($this->currentSpeed === 0) {
        $startingNoise = "Vroum Vroum";
        if ($this->hasParkBrake){
            throw new Exception("Le frein à main est activé" . "<br>");
        }
        return $startingNoise;
    }
}


    /**
     * Get the value of hasParkBrake
     */ 
    public function getHasParkBrake()
    {
        return $this->hasParkBrake;
    }

    /**
     * Set the value of hasParkBrake
     *
     * @return  self
     */ 
    public function setHasParkBrake($hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;

        return $this;
    }
}
