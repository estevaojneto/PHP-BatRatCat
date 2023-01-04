<?php declare(strict_types=1);

class GroundIterator implements \Iterator
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
        $current_movement = current($this->animals)['movement'];
        if ($current_movement !== 'ground')
        {
            // Example logic: if animal is not a feline, throw a Warning
            trigger_error("Animal '". current($this->animals)['name'] ."' is not an animal that walks or runs!");
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