# Strategy Design Pattern

## What is it?

The Strategy design pattern is used to organize the logic for classes whose objects should do be able to do the same things, but differently.

## How can it be used?

In our particular context of 3 animals, all of them are capable of producing sound; how each one does it, however, is different. And although it would certainly work, it isn't too elegant to just do some check like "if is cat then meow", "if is bat then click", "else if is rat then squeak". This is specially true in more complex code.

Another example I've seen floating around is for payment methods. Credit card, bank transfer (PIX if you are brazilian), no matter - they essentially all have to do the same things, which is contact "someone" (bank, credit card provider, etc), give this "someone" the payment information, then return an information of whether the payment was successful or not. These are steps that are implemented by essentially all payment methods, but their individual implementations can be radically different from one another. If the Strategy pattern is not used, this can mean a lot of "ifs" to all the payment cases, leading to god functions, breaking the "S" in "SOLID" (Single-Responsibility Principle), and a lot of maintainability problems. In other words: code goes to hell.

## How could it be done differently

If I had used a factory to determine the correct type of animal to create, this example would become quite similar to the Abstract Factory. An Abstract Factory would be more appropriate if you need to have some form of control of how the object is created - in this simple implementation, this wasn't necessary. I find that the two patterns can sometimes be interchangeable - but as I cannot stop repeating, context matters, you don't need to use a design pattern just to prove you know it.