<?php declare(strict_types=1);

spl_autoload_register(function ($class) {
    include $class . '.php';
});

function doAnimalNameAndSound(AnimalFactory $animal_factory)
{
    $animal = $animal_factory->createAnimal();
    echo get_class($animal).": ".$animal->doSound();
}

doAnimalNameAndSound((new BatFactory()));
doAnimalNameAndSound((new RatFactory()));
doAnimalNameAndSound((new CatFactory()));