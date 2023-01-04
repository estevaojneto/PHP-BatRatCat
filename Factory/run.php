<?php declare(strict_types=1);

spl_autoload_register(function ($class) {
    include $class . '.php';
});

$animals_json = file_get_contents(dirname(__DIR__).'/data.json');

$animals = json_decode($animals_json, true);

foreach ($animals as $animal)
{
    $animal_object = AnimalFactory::create($animal);
    if ($animal_object !== false) {
        // animal name is echoed by the animal constructor to show that it is saving the $name
        echo " was created with the class: ".get_class($animal_object).PHP_EOL;
    } else {
        throw new Exception("Could not create an object for animal ".$animal['name']);
    }
}
