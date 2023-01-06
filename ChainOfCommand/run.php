<?php declare(strict_types=1);

spl_autoload_register(function ($class) {
    include $class . '.php';
});

$hungry_bat = new Bat();
$hungry_rat = new Rat();
$hungry_cat = new Cat();

$hungry_bat->set_next($hungry_cat)->set_next($hungry_rat);

$food = "garlic";
echo "Feeding Garlic:".PHP_EOL;
$hungry_bat->eat($food);

echo PHP_EOL;

echo "Feeding some other food:".PHP_EOL;
$food = "anything but garlic";
$hungry_bat->eat($food);