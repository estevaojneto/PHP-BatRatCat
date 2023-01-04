<?php

class AnimalSingleton
{
    private static $instance;
    private $animal_name;

    protected function __construct() { }

    public static function getInstance()
    {
        if (self::$instance === null)
        {
            self::$instance = new self;
        }
    
        return self::$instance;
    }

    public function setAnimalName(string $animal_name)
    {
        if ($this->animal_name === null) {
            $this->animal_name = $animal_name;
        }
        return $this;
    }

    public function getAnimalName()
    {
        return $this->animal_name;
    }
}