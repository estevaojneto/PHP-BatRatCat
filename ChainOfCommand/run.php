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
$food = "anything but garlic";
echo "Feeding some other food:".PHP_EOL;
$hungry_bat->eat($food);

echo PHP_EOL;
$food = "tuna";
echo "Trying in a different point of the chain of command:".PHP_EOL;
$hungry_cat->eat($food);