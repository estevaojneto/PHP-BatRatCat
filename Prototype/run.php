<?php declare(strict_types=1);

spl_autoload_register(function ($class) {
    include $class . '.php';
});

$cat = new Cat();
$cat->sound = "Meow";
$cat->setName("Tom");

$another_cat = $cat->clone();

echo "A TALE OF TWO CATS".PHP_EOL;
echo $cat->getName()." is a cat who goes ".$cat->sound.PHP_EOL;
echo "He was cloned, his owners thought to also name the clone ".$another_cat->getName().PHP_EOL;

$another_cat->setName("Whiskers");
echo "But cloned cat prefers to be called ".$another_cat->getName().PHP_EOL;

$cat->sound = "Moo";

echo "The original cat decided to go ".$cat->sound.PHP_EOL;
echo "And the clone is still ".$another_cat->sound;