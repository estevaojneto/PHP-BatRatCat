# Abstract Factory Design Pattern

## What is it?
You can think of the Abstract Factory design pattern as a "factory of factories". The Factory Design Pattern is used to help determine the correct object to be created under a certain condition - in the case of the Abstract Factory, it takes that idea further: it allows us to be as flexible as not even having to define the type of Factory we want to use - as long as all factories implement a common interface.

## How can it be used?
In this example, all of the animal factories implement a common interface AnimalFactory, which allows for passing a Factory object to a function which then calls `createAnimal()`. Each animal on itself implements an `AnimalTemplate` with a `doSound()` method - so no matter what we are passing to the function, it will build the animal correctly and display its sound correctly

This capacity allows us to have flexibility not only in the objects we create (which is what traditional, simple Factory pattern allows us to) - it allows any type of Factory to be made. The most common example of this I have seen by searching other documentation is for defining different types of content readers (JSON, XML, YAML, or any other format).


## How could it be done differently
I have seen examples where the abstract factory (AnimalFactory in this case) is not an Interface, but an Abstract class. I prefer the Interface approach in this case.

My initial attempt at the implementation here did use an Abstract class so I did not have to create e.g a `createCat()` inside a `HerbivoreFactory`, which makes no sense. Interfaces *require* you to create a matching function in the class where it is implemented - abstract classes don't. So turns out that even though I _could_ use an Abstract class instead of an Interface, in reality using that animal characteristic for the abstraction was not the correct approach.

So it seems to be like Interfaces tend to lead to better abstractions. But as I have repeated a few times now - context always matters when looking for a code solution.