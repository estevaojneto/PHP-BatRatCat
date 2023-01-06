<?php

class Cat extends FoodChain
{
    public function eat($food)
    {
        if ($food == 'garlic')
        {
            echo "CAT: I cannot eat garlic because it is lethal for my species!".PHP_EOL;
            return parent::eat($food);
        } else {
            echo "BAT: Thanks for the snack!";
            return true;
        }
    }
}