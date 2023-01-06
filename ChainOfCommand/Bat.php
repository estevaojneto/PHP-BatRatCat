<?php

class Bat extends FoodChain
{
    public function eat($food)
    {
        if ($food == 'garlic')
        {
            echo "BAT: I cannot eat garlic because I am Drac... I mean, I don't like the taste!".PHP_EOL;
            return parent::eat($food);
        } else {
            echo "BAT: Thanks for the snack!";
            return true;
        }
    }
}