
<!-- ABOUT THE PROJECT -->
## Solution description

### Animals classes

As described in the task I created a class system with given requirements. 

Base class is Animal class which is abstract. There I gathered common functionalities which are:
 - `__toString` magic method,
 - `getName` method which just a getter for `name` property,
 - `species` and `name` properties.

I have some concerns about putting `species` property in the base class as the idea of `Animal` class is that it has no species defined. However I use it in `__toString` method to display species name.

Then I created three child abstract classes for different types of diets.

And then I created classes for each species of animals. Each class extends it's diet type class.

### Zoo

For the `Zoo` class besides required adding methods I've added also a method to empty zoo and to list all animals.

### Fur

Method for fur I've added using trait. I was thinking about using interface but the code is the same, so I went with trait.

### Demo

I've created a simple demo in `demo.php` file. You can run it by typing `php demo.php` in the terminal.

### Translations

About the whole translation thing. In the task description there is this example:

```
$dog = new Dog(/* ... */);
echo $dog;
Powinno przykładowo wypisać:
Pies Duke
```

So I assume that the task should be done in Polish. But it didn't feel right to me that all string will be in Polish (what if we decide go hit foreign markets :smile: ). 

And as task says that project should be expandable, so I decided to implement simple translation system.

### Code quality

In order to keep the code quality I used `PHP_CodeSniffer` with `PSR-12` standard. I also used `PHPStan` (level 8) to check for possible errors.

### Tests

I've created some simple tests for the project. You can run them by typing `php vendor/bin/phpunit` in the terminal.
