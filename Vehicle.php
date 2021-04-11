<?php

abstract class Vehicle 
{

protected string $name; 

protected string $color;

protected int $currentSpeed = 0;

protected int $seatNb;

protected int $wheelNb;

protected string $energy;

public const ALLOWED_ENERGIES = [

    'fuel',

    'electric',

];

public function __construct(string $color, int $seatNb, string $name = "car")
{
    $this->color = $color;
    $this->seatNb = $seatNb;
    $this->name = $name;
}

public function stop() //arrêter
{
    if ($this->currentSpeed === 0) {
        $silence = "The " . $this->name . " is turned off";
        return $silence;
    }
}

public function start() //démarrer
{
    $startingNoise = "";
    if ($this->currentSpeed === 0) {
        $startingNoise = "Vroum Vroum";
        return $startingNoise;
    }
}

public function forward(): string

    {

        $this->currentSpeed = 15;

        return "Go !";

    }


    public function brake(): string

    {

        $sentence = "";

        while ($this->currentSpeed > 0) {

            $this->currentSpeed--;

            $sentence .= "Brake !!!";

        }


        $sentence .= "I'm stopped !";

        return $sentence;

    }


    public function getCurrentSpeed(): int

    {

        return $this->currentSpeed;

    }


    public function setCurrentSpeed(int $currentSpeed): void

    {

        if($currentSpeed >= 0){

            $this->currentSpeed = $currentSpeed;

        }

    }


    public function getColor(): string

    {

        return $this->color;

    }


    public function setColor(string $color): void

    {

        $this->color = $color;

    }


    public function getNbSeats(): int

    {

        return $this->nbSeats;

    }


    public function setNbSeats(int $nbSeats): void

    {

        $this->nbSeats = $nbSeats;

    }


    public function getNbWheels(): int

    {

        return $this->nbWheels;

    }


    public function setNbWheels(int $nbWheels): void

    {

        $this->nbWheels = $nbWheels;

    }

        /**
     * Set the value of energy
     *
     * @return  self
     */
    public function setEnergy(string $energy): self

{

    if (in_array($energy, self::ALLOWED_ENERGIES)) {

        $this->energy = $energy;

    }

    return $this;

}

    /**
     * Get the value of energy
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }


}
