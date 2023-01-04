<?php

interface AnimalFactory
{
    public function createAnimal() : AnimalTemplate;
}