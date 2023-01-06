<?php

class Bat implements AnimalInterface
{
    public function eat()
    {
        echo "The Bat Strategy: click click click clickity click!".PHP_EOL;
    }
}