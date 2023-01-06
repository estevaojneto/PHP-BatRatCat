<?php

class Cat implements AnimalInterface
{
    public function doSound()
    {
        echo "The Cat Strategy: meow hiss meow purr purr meow!".PHP_EOL;
    }
}