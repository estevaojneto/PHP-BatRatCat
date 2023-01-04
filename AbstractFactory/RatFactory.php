
<?php

class RatFactory implements AnimalFactory
{
    public function createAnimal() : AnimalTemplate
    {
        return new Rat();
    }
}