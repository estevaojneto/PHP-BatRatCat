<?php

class Cat extends AnimalPrototype
{
    private $name;

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    public function getName()
    {
        return $this->name;
    }
    public function clone()
    {
        $clone = clone $this;
        //A programer may decide to name its cat an unique ID:
        //$clone->setName(bin2hex(random_bytes(4)));
        return $clone;
    }
}