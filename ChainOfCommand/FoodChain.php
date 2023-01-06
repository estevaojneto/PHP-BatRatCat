<?php

abstract class FoodChain implements Hunger
{
    private $next_eater;

    public function set_next($next_eater) {
        $this->next_eater = $next_eater;
        return $next_eater;
    }

    public function eat($food)
    {
        if ($this->next_eater) {
            return $this->next_eater->eat($food);
        }
        return null;
    }
}