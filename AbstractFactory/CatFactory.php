<?php

class CatFactory implements AnimalFactory
{
    public function createAnimal() : AnimalTemplate
    {
        return new Cat();
    }
}