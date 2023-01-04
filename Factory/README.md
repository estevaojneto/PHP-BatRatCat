# Factory Design Pattern

## What it is?

The Factory Design Pattern allows you to create an specialized object without having to specify exactly what object should be created.

## How can it be used?

In the code example, when the animal name we are iterating over is "bat", we obtain a `Bat()` instance (ie: Bat object); when the animal is "Cat" we obtain a `Cat()` object and when it is rat we obtain a `Rat()` object. The factory makes sure that the correct object is created. Thus, it replaces a lot of "if-elses" or a "switch" clause when you have to create an object that will have a different class according to certain conditions.

While in this example it would seem much more easier to just do the switch() clause, we have to consider big implementations; what if our app was contacting a Zoo's API? There would probably be hundreds of possible animals, so the switch() clause would explode quite quickly. That's why using a Factory is always better when applicable.

## How could it be done differently

One thing I could have implemented is an Interface called "Noise" in the parent class Animal which implements a function "doSound()". So you could call like "$cat->doSound()" and get a string "meow" in return, provided that the doSound() method inside the class "Cat" did a `return "meow";`.


Another pattern which could have been used is the Null Object Pattern; instead of the Factory returning `false` if we came across an animal we don't have a class for, it could return a NullAnimal object. This would ensure type safety, as the Factory would *always* return an object of the type Animal, even if it was an invalid animal (NullAnimal).