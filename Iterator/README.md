# Iterator Design Pattern

## What it is?

PHP implements an Interface called "Traversable" which is implemented by everything (objects, arrays) that you can iterate over using a foreach().

## How can it be used?
The examples here are demonstrating how we can use the Traversable interface to change the behavior of each of the methods used when iterating over an Traversable, such as an array (the data.json is decoded as an assoc array).

Here are the example usages I have come up with:

- FelineIterator will throw a PHP warning if the current animal is not a feline;
- RodentIterator will throw a PHP warning if the animal at the current index is not a rodent;
- CarnivoreIterator will display a message before it starts iterating over the animals array;

Those are very basic examples of how business logic can be applied inside each step of the iteration process. The advantages are less cluttered code - you no longer need a bunch of "ifs" - and lower memory being used by the PHP script, not to mention that it also allows you to use all the OOP toolset on it.

## How could it be done differently
I could have created an AnimalIteratorFactory for factoring each one of the 3 iterators here. This would also allow me to create a superclass AnimalIterator which could, for example, tell if what I was iterating over is actually an animal, and not a vegetable for example. Iterators are a very powerful tool which PHP offers us.

Additionally, instead of iterating over a decoded JSON (associative array), I could create an AnimalCollection which implements IteratorAggregate; it would be possible to use the method getIterator() to fetch an iterator for this collection.

PHP7.1 onwards implements a function "is_iteratable()" which does exactly that: tells you if a certain value type implements Traversable (or to put it simply: if you can use a foreach() to operate on it).