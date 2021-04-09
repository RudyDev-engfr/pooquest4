<?php

class Truck extends Vehicle
{
    private int $storage;

    private int $load = 0;

    public function __construct (int $storage, string $color, int $seatNb, string $energy)
    {
        parent::__construct($color, $seatNb, "truck");
        $this->storage = $storage;
        $this->setEnergy($energy);
    }

    public function loadingStatement()
    {   
        $loadingStatement = "";
        if($this->load === $this->storage){
            return $loadingStatement = "Full";
        }
        elseif($this->load < $this->storage){
            return $loadingStatement = "In filling";
        } else {
            return $loadingStatement = "There is a problem";
        }
    }
    /**
     * Get the value of load
     */ 
    public function getLoad()
    {
        return $this->load;
    }

    /**
     * Set the value of load
     *
     * @return  self
     */ 
    public function setLoad($load)
    {
        $this->load = $load;

        return $this;
    }

    /**
     * Get the value of storage
     */ 
    public function getStorage()
    {
        return $this->storage;
    }

    /**
     * Set the value of storage
     *
     * @return  self
     */ 
    public function setStorage($storage)
    {
        $this->storage = $storage;

        return $this;
    }
}