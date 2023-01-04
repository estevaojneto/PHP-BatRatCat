<?php

class AnimalFactory
{
    public static function create($animal_args)
    {
        $name = $animal_args['name'];
        $classes = [
            'bat' => Bat::class,
            'rat' => Rat::class,
            'cat' => Cat::class
        ];

        if (array_key_exists($name, $classes)) return new $classes[$name]($animal_args);
        else return false;
    }
}