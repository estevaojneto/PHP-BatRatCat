<?php declare(strict_types=1);

class FelineIterator implements \Iterator
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
        $current_attribute = current($this->animals)['attribute'];
        if ($current_attribute !== 'feline')
        {
            // Example logic: if animal is not a feline, throw a Warning
            trigger_error("Animal '". current($this->animals)['name'] ."' is not a feline!");
        }
        return current($this->animals);
    }

    public function key()
    {
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