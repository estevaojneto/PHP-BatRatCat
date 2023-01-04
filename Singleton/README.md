# Singleton Design Pattern

## What is it?

The Singleton is a pattern (argued by some as an anti-pattern; I'll get to it) which ensures that throughout the lifecycle of a script, only a single instance of the class is created and used. It has some tell-tale signs of it being used; the constructor is private or protected (if you want to use inheritance), there is a static method called "getInstance()", and there is a static value that is usually called `$instance`. These are ways you can tell if a class is using the Singleton pattern or not.

## How can it be used?

The Singleton recently has been painted as a villain by some programmers, as it supposedly breaks one of OOP's main advantages which is reusability; there is no way to create another instance of the object if it is bound by a singleton, which leads to some calling it an anti-pattern. I disagree with this view; OOP should be used as long as it's useful and leads to better code (and it almost always does), but that doesn't mean we have to be dogmatic about using OOP.

I can't say much about other domains, but in PHP and web development, Singletons have very clear and useful use-cases, such as for Database connections or file read/write operations. You don't need or want your script to be running multiple DB connections simultaneously during its lifecycle under risk of corrupting your database (especially if it is not using the `START TRANSACTION` SQL lock), and you also don't want a file to be read and written by multiple instances of e.g a `TextFileWriter` class, under the risk of corrupting its data.

However, in defence of the Singleton detractors, I will say this: its overuse can indeed be tempting if one does not understand its scope of application, and can be easily used to write bad code. So like with everything in life: use with moderation and responsibility.

## How could it be done differently

As you can see, this example outputs `cat cat`. This is intentional.

In my example I am ensuring that only a single object of AnimalSingleton can be created, and also that its property `$animal_name` can be set only once per instance. So when I try to get the Singleton instance and pass another value to it, it will not work. This demonstrates the application of the Singleton because I am running `getInstance()` to get the Singleton instance; if a new object were being created, then `$animal_name` could be changed, and we would get `cat bat` as output.

You also can use a static array to save multiple instances of a Singleton. I've never had a reason to apply that idea, but it isn't impossible.