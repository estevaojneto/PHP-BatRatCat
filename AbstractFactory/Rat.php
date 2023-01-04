<?php

class Rat implements AnimalTemplate
{
    public function doSound(): string
    {
        return "Squeak!".PHP_EOL;
    }
}