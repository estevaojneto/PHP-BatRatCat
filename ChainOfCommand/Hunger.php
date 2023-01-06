<?php

interface Hunger
{
    public function eat($food);
    public function set_next($next_eater);
}