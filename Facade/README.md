# Facade Design Pattern

## What is it?

Facade is one of the Patterns whose name is already very close to defining its concept. It is a simplified interface for communicating with "something complex": it could be an entire framework, a complex library, or anything whose calling process can be simplified. It is, literally, a facade.

## How can it be used?

If you have ever worked with Laravel, I think you most likely have already seen this pattern in use. So I will use it with a real-world example: recently I had to do a cURL from within a system which used Laravel as its framework. The process of constructing the PHP-cURL object [can take quite a few lines of code](https://www.php.net/manual/en/curl.examples-basic.php). In Laravel I could simply do:

`Http::send('GET', {$server}, ['body' => {the data I want to send}]);`

...which is a single-line of code much more readable than all the `curl_` configuration functions that you usually have to do when the framework does not a offer *Http facade*, like Laravel does.

The example here uses PHP's own functions for hashing or encoding strings. We don't control PHP's functions - we just offer a facade (aha!) to allow easy usage of such functions.

## How could it be done differently

I could have taken the abstraction a level further and have each encoder have its own class. I could also have split the hashing and encoding functions in different facades, too. In this particular example, of course I could have just called the encoding and hashing functions directly, but that will not always be possible in more complex systems, thus why Facades are important.