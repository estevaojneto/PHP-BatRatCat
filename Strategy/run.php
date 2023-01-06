<?php declare(strict_types=1);

spl_autoload_register(function ($class) {
    include $class . '.php';
});

$animals_json = file_get_contents(dirname(__DIR__).'/data.json');

$animals = json_decode($animals_json, true);

echo (new AnimalStrategy(new Bat))->doSound();
echo (new AnimalStrategy(new Rat))->doSound();
echo (new AnimalStrategy(new Cat))->doSound();
