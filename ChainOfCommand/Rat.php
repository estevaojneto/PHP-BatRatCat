<?php

class Rat extends FoodChain
{
    public function eat($food)
    {
        if ($food == 'garlic')
        {
            echo "RAT: I am on a diet of only garlic, I will have that. Thanks for the snack!".PHP_EOL;
            return true;
        } else {
            echo "RAT: No thanks, I'm on a diet";
            return parent::eat($food);
        }
    }
}