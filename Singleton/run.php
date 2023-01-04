<?php declare(strict_types=1);

spl_autoload_register(function ($class) {
    include $class . '.php';
});

$animals_json = file_get_contents(dirname(__DIR__).'/data.json');

$animals = json_decode($animals_json, true);

// set an animal once
$singleton = AnimalSingleton::getInstance()->setAnimalName($animals[2]['name']);
echo AnimalSingleton::getInstance()->getAnimalName().PHP_EOL;
// try to change the animal
$singleton = AnimalSingleton::getInstance()->setAnimalName($animals[0]['name']);
echo AnimalSingleton::getInstance()->getAnimalName().PHP_EOL;