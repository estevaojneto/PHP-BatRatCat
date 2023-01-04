<?php declare(strict_types=1);

class RodentIterator implements \Iterator
{
    public array $animals;
    public function __construct(string $animals)
    {
        $this->animals = json_decode($animals, true);
    }

    public function rewind()
    {
        reset($this->animals);
    }


    public function current()
    {
        return current($this->animals);
    }

    public function key()
    {
        if (current($this->animals)['attribute'] !== 'rodent')
        {
            trigger_error("Animal at position #". key($this->animals) ." is not a rodent!");
        }
        return key($this->animals);
    }

    public function next()
    {
        next($this->animals);
    }

    public function valid()
    {
        return current($this->animals);
    }
}