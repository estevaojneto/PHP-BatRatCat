<?php

class AnimalStrategy implements AnimalInterface
{
    public $animal;

    public function __construct(AnimalInterface $animal)
    {
        $this->animal = $animal;        
    }

    public function doSound()
    {
        $this->animal->doSound();
    }
}