<?php declare(strict_types=1);

class CarnivoreIterator implements \Iterator
{
    public array $animals;
    public function __construct(string $animals)
    {
        $this->animals = json_decode($animals, true);
    }

    public function rewind()
    {
        echo "ITERATOR ANSWERS: Yes, boss!";
        reset($this->animals);
    }

    public function current()
    {
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