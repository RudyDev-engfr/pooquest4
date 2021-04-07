<?php 

class Bicycle
{
    private string $color;


    private int $currentSpeed;


    private int $nbSeats = 1;


    private int $nbWheels = 2;

    /**
     * Get the value of currentSpeed
     */ 
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake(): string 
    {
        $sentence = "";
        while ($this->currentSpeed > 0){
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped";
        return $sentence;
    }
    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color): self
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * Set the value of currentSpeed
     *
     * @return  self
     */ 
    public function setCurrentSpeed(int $currentSpeed): self
    {
        $this->currentSpeed = $currentSpeed;

        return $this;
    }
    }

