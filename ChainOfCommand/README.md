# Chain Of Command Design Pattern

## What is it?

The Chain of Command is a Design Pattern which we can use to process things in a certain order, or when we have something that we want to bring along a certain process to try to have it processed. It allows processing to follow a workflow, instead of coupling it to a specific object to try to do the processing.

## How can it be used?

Here we have 3 hungry animals, and the first food we attempt to feed them is garlic. We initially set the order in which we will offer the food to each of them, then we try asking the first one in line (the bat) whether they want to eat the garlic.

The bat does not eat garlic; in a more scientific language, this object is not capable of attending to our request, so it must pass it on.
The next in line is the cat. The cat also cannot process our request to eat garlic; it must pass it on.
The last one in line is the rat. It can process the garlic; this is the one that will actually do our processing.

Once we try to offer any other food than garlic, all dietary restrictions are removed, and the first in line (bat) can actually do the processing (eat).

This is especially useful in handling HTTP requests - if you are familiar with network, it might even have reminded how TCP/IP works. Depending on the type of response you obtain from a certain request, you might need a chain of command to do the correct processing of the information. 

## How could it be done differently

In my examples all the processing I do is just checking  if the food is garlic or not. Of course, in the real world, a lot more processing _may or may not_ be done by each member in the chain. This also allows for the possibility of each one of the members of the chain doing part of the processing (again, similar to how TCP/IP works), then other one doing another part, and so on.