<?php

class Cat implements AnimalTemplate
{
    public function doSound(): string
    {
        return "Meow!".PHP_EOL;
    }
}