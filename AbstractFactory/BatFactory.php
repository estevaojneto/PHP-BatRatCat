
<?php

class BatFactory implements AnimalFactory
{
    public function createAnimal() : AnimalTemplate
    {
        return new Bat();
    }
}