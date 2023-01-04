<?php

abstract class Animal
{
    public string $name;
    public function __construct(array $animal_info)
    {
        $this->name = $animal_info['name'];
        echo $this->name;
    }
}