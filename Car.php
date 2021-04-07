<?php


class Car 
{
private int $wheelNb = 4;

private int $currentSpeed = 0;

private string $color;

private int $seatNb;

private string $energy;

private int $fuelLevel = 40;


public function __construct(string $color, int $seatNb, string $energy) {
    $this->color = $color;
    $this->seatNb = $seatNb;
    $this->energy = $energy;
}

public function forward() //avancer
{   
    $vroum = "";
     while($this->currentSpeed < 80){
         $this->currentSpeed +=10;
         $this->fuelLevel -=0.2;
         $vroum .= "VROUM" . "<br>";
        }
        return $vroum;
       return $maxSpeed = "I'm at the max speed allowed on a commun road";
}

public function brake()//freiner
{
    $sentence = "";
    while ($this->currentSpeed > 0){
        $this->currentSpeed-=20;
        $sentence .= "Brake !!!" . "<br>";
    }
    $sentence .= "I'm stopped";
    return $sentence;
}

public function stop() //arrêter
{  
    if($this->currentSpeed === 0){
         $silence = "The car is turned off";
         return $silence;
    }
}

public function start() //démarrer
{
    $startingNoise = "";
    if ($this->currentSpeed === 0){
        $startingNoise = "Vroum Vroum";
        return $startingNoise;
    }
}

/**
 * Get the value of color
 */ 
public function getColor(): string
{
return $this->color;
}
/**
 * Get the value of seatNb
 */ 
public function getSeatNb(): int
{
return $this->seatNb;
}

/**
 * Get the value of energy
 */ 
public function getEnergy(): string
{
return $this->energy;
}

/**
 * Get the value of wheelNb
 */ 
public function getWheelNb()
{
return $this->wheelNb;
}
/**
 * Get the value of speed
 */ 
public function getSpeed()
{
return $this->speed;
}

/**
 * Get the value of fuelLevel
 */ 
public function getFuelLevel()
{
return $this->fuelLevel;
}


/**
 * Get the value of currentSpeed
 */ 
public function getCurrentSpeed()
{
return $this->currentSpeed;
}

/**
 * Set the value of currentSpeed
 *
 * @return  self
 */ 
public function setCurrentSpeed($currentSpeed)
{
$this->currentSpeed = $currentSpeed;

return $this;
}
}