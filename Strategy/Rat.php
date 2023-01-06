<?php

class Rat implements AnimalInterface
{
    public function doSound()
    {
        echo "The Rat Strategy: squeak squeakysqueaky squeak squeak!".PHP_EOL;
    }
}