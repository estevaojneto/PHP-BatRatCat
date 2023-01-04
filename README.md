# Bat Rat Cat: PHP Design Pattern examples

...by estevaojneto (Estevão Neto)


## What is this?

These are practical examples implementations of the most popular PHP Design Patterns. The idea is that there is a sample data file containing information about 3 animals: cats, rats and bats, and we operate upon this data using Design Patterns. Each Design Pattern is separate into its own folder, and each folder contains:

- A README file containing a brief theoretical explanation of the Pattern;
- A `run.php` file which executes the code example - you can execute it with the command `php run.php`;
- PHP code files which are required to show the example.


## What is the sample data?

If you check `data.json`, it has a list of each animal and its attributes. You can think of this, for example, as the return info for an API, and each example as a possible use-case for consuming that API using PHP.


## Why Cat, Rat and Bat?

Because they sound like similar names for animals which are different between them. Despite that, they are animals which might overlap between them in some characteristics:


- Rats and Bats are (kind-of) rodents*, but Cats are felines;

- Cats and Rats can only walk and run, but Bats can fly;

- Bats and Cats are carnivores, but Rats are herbivore.


Any biologist will probably want to kill me by now; I do know these are very simplified and crass views of each animal, but they are good for illustrating the Patterns I want to show.


## How can I run the examples?

Run `php run.php` inside each example folder. Please note the examples here were created using PHP8.0.


## Why didn't you use "X" Pattern here?

I have set the constraint of using *only* the Pattern I would like to demonstrate in each example. This is so the code base for each example wouldn't exponentially grow; for example, in the Iterator example, I could have used Factories for each Iterator; the simple example would then expand to something much bigger. So I'm limiting to showing only *one* Pattern per example.


## "X" Pattern is missing

These Patterns will be continually added and reviewed, it might be that the ones you want aren't here yet. I apologise for so - if there is any Pattern not here that you would like me to do an example, by all please let me know! You can find my LinkedIn page in my Github profile.



*Bats are actually closer to primates than to rodents. You learn something new every day.