# Prototype Design Pattern

## What is it?

The Prototype Design Pattern is useful when you need to clone an object verbatim; it allows you to copy it (this implies a new instance of the class) in its entirety, including even fields/values which are set as private. This is a much better alternative than having to manually reassign values from one object to a new one, also under the risk that you would not be able to set values which have their visibility set as protected or private.

This design pattern can be applied to any Object-Oriented language, of course, but I'd say it is especially interesting in PHP. You see, if you do something like "$a = 1; $b = $a; $a = 2", $b will still be 1 even if $a changes to 2. The value is copied; there is no pointer pass-by-reference game at play here. But this does not happen with objects; if you have like "$a = new someClass(); $a->value = 1; $b = $a; $a->number = 2;", then $b will 'track' $a, because it is just a memory reference to $a unless you actively clone it.

## How can it be used?

A recurring interesting example of this is in ecommerce websites. Suppose you want to offer the client a option to add two products to their shopping cart which are exactly equal but just different in one aspect (e.g a different color). Instead of creating one object and manually assigning all its values to another one, you can just set a Prototype which allows you to easily fetch a clone of it and change only its color property. This leads to much less code rewrites and less bugs - as mentioned above, there may be cases in which you cannot copy properties over from one object to another, like if a value is protected or private.

In our example we cloned a cat named Tom; its clone was also initially called Tom until its name was changed to Whiskers. Tom decided to stop meowing and start mooing, but Whiskers found this behavior strange and continued to meow. This bizarre example shows two important things: that the original and the cloned objects are *different class instances*, and that private fields are cloned by using PHP's `clone()` built-in method.

## How could it be done differently

In this case I couldn't come up with a way to use all the animals, so I picked off my favorite animal. But this could be use for Bat, Rat, Product, User, DBConnection, anyways - any class instance that you need to copy really.
Also, in some examples, I have seen people extend PHP's `__clone()` method within their Prototype class. This could be done, and could even useful in some specific cases, like you need to clone an object but its ID field needs to be different - you could do that through inside __clone(), for example. There is a commented line in the Cat class demonstrating that - a cat whose name is automatically changed every time it is cloned.