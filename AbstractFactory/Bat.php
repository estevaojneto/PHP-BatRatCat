<?php

class Bat implements AnimalTemplate
{
    public function doSound(): string
    {
        return "Click!".PHP_EOL;
    }
}