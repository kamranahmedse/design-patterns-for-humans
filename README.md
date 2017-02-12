Design Patterns for Humans
==========================
> Ultra-simplified explanation to design patterns!

Design patterns is something that can easily make anyone's mind wobble. Here I try to make them stick in to your (and maybe mine?!) mind by explaining them in the *simplest* way possible. 

## Table of Contents
* [Design patterns](#design-patterns) 
* [Creational](#creational-design-patterns)
* [Structural](#structural-design-patterns)
* [Behavioral](#behavioral-design-patterns)

Design Patterns
===============
In plain words
> Solutions to recurring problems. Guidelines on how to tackle certain problems.
 
**Wikipedia Says**
> In software engineering, a software design pattern is a general reusable solution to a commonly occurring problem within a given context in software design. It is not a finished design that can be transformed directly into source or machine code. It is a description or template for how to solve a problem that can be used in many different situations.  

They are not classes, packages or libraries that you can plug into your application and wait for the magic to happen. These are, rather, guidelines on how to tackle certain problems in certain situations. 

> - They are not a silver bullet to all your problems. You should not try to force them.
> - Keep in mind that design patterns are solutions **to** problems, not solutions **finding** problems. So do not pick a design pattern and try to force it. 
> - If used in a correct place in a correct manner, they can prove to be a savior; or else they can result in a horrible mess of a code.

Creational Design Patterns
==========================

In plain words
> Creational patterns are focused towards how to instantiate an object or group of related objects.

Wikipedia says
> In software engineering, creational design patterns are design patterns that deal with object creation mechanisms, trying to create objects in a manner suitable to the situation. The basic form of object creation could result in design problems or added complexity to the design. Creational design patterns solve this problem by somehow controlling this object creation.
 
 * [Simple Factory](#simple-factory)
 * [Factory Method](#factory-method)
 * [Abstract Factory](#abstract-factory)
 * [Builder](#builder)
 * [Prototype](#prototype)
 * [Singleton](#singleton)
 
Simple Factory
--------------
Real World Example
> Consider, you are building a house and you need doors. It would be a mess if every time you need a door, you put on your carpenter clothes and start making a door in your house. Instead you get it made from a factory.

In plain words
> Simple factory simply generates an instance for client without exposing any instantiation logic to the client

Wikipedia says
> In object-oriented programming (OOP), a factory is an object for creating other objects – formally a factory is a function or method that returns objects of a varying prototype or class from some method call, which is assumed to be "new".

**Programmatic Example**
```php
class DoorFactory {

   public function makeDoor() : Door {
       // Creation logic
   }
}
```

**When to Use?**
When creating an object is not just a few assignments and involves some logic, it makes sense to put it in a dedicated factory instead of repeating the same code everywhere. 

Factory Method
--------------
Real World Example
> Consider the case of a hiring manager. It is impossible for one person to interview for each of the positions. Based on the job opening, she has to decide and delegate the interview steps to different people. 

**In Plain Words**
> It provides a way to delegate the instantiation logic to child classes. 

Wikipedia says
> In class-based programming, the factory method pattern is a creational pattern that uses factory methods to deal with the problem of creating objects without having to specify the exact class of the object that will be created. This is done by creating objects by calling a factory method—either specified in an interface and implemented by child classes, or implemented in a base class and optionally overridden by derived classes—rather than by calling a constructor.
 
 **Programmatic Example**
 Taking our hiring manager example above:
```php
 class HiringManager {

    abstract public function makeInterviewer() : Interviewer;
    
    public function takeInterview() {
        $interivewer = $this->makeInterviewer();
        // do the interview
    }
 }
 ```
Now any child can extend it and provide the required interviewer
```php
class DevelopmentManager extends HiringManager {
    public function makeInterviewer() : Interviewer {
        return new Developer();
    }
}

class MarketingManager extends HiringManager {
    public function makeInterviewer() : Interviewer {
        return new CommunityExecutive();
    }
}
```
and then it can be used as

```php
$devManager = new DevelopmentManager();
$devManager->takeInterview();
```

**When to use?**
Useful when there is some generic processing in a class but the required sub-class is dynamically decided at runtime. Or putting it in other words, when the client doesn't know what exact sub-class it might need.

Abstract Factory
----------------
Real World Example
> Extending our door example from (Simple Factory)[#simple-factory]. Based on your needs you might get a wooden door from a wooden door shop, iron door from an iron shop or a PVC door from the relevant shop. Plus you might need a guy with different kind of specialities to fit the door, for example a carpenter for wooden door, welder for iron door etc. As you can see there is a dependency between the doors now, wooden door needs carpenter, iron door needs a welder etc.

In plain words
> A factory of factories; a factory that groups the individual but related/dependent factories together without specifying their concrete classes. 
  
Wikipedia says
> The abstract factory pattern provides a way to encapsulate a group of individual factories that have a common theme without specifying their concrete classes

**Programmatic Example**
Translating the door example above

```php
interface DoorFactory {
    public function makeDoor() : Door;
    public function makeFittingExpert() : DoorFittingExpert;
}
```
Wooden door factory to get a wooden door and the relevant wooden door fitting expert
```php
class WoodenDoorFactory implements DoorFactory {
    public function makeDoor() : Door {
        // Create wooden door
        return $woodenDoor;
    }

    public function makeFittingExpert() : DoorFittingExpert{
        // Create wooden door fitting expert
        return $carpenter;
    }
}
```
Iron door factory to get iron door and the relevant fitting expert
```php
class IronDoorFactory implements DoorFactory {
    public function makeDoor() : Door {
        // Create iron door
        return $ironDoor;
    }

    public function makeFittingExpert() : DoorFittingExpert{
        // Create iron door fitting expert
        return $welder;
    }
}
```

As you can see the wooden door factory has encapsulated the `carpenter` and the `wooden door` also iron door factory has encapsulated the `iron door` and `welder`. And thus it had helped us make sure that for each of the created door, we do not get a wrong fitting expert.   

**When to use?**
When there are interrelated dependencies with not-that-simple creation logic involved

Builder Pattern
--------------------------------------------
Real World Example
> Imagine you are at Hardee's and you order a specific deal, lets say, "Big Hardee" and they hand it over to you without *any questions*; this is the example of simple factory. But there are cases when the creation logic might involve more steps. For example you want a customized Subway deal, you have several options in how your burger is made e.g what bread do you want? what types of sauces would you like? What cheese would you want? etc. In such cases builder pattern comes to the rescue.

In plain words
> Allows you to create different flavors of an object while avoiding constructor pollution. Useful when there could be several flavors of an object. Or when there are a lot of steps involved in creation of an object.
 
Wikipedia says
> The builder pattern is an object creation software design pattern with the intentions of finding a solution to the telescoping constructor anti-pattern.

Having said that let me add a bit about what telescoping constructor anti-pattern is. At one point or the other we have all seen a constructor like below:
 
```php
public function __construct($size, $cheese = true, $pepperoni = true, $tomato = false, $lettuce = true) {
}
```

As you can see; the number of constructor parameters can quickly get out of hand and it might become difficult to understand the arrangement of parameters. Plus this parameter list could keep on growing if you would want to add more options in future. This is called telescoping constructor anti-pattern.

**Programmatic Example**
The sane alternative is to use the builder pattern.

```php
class BurgerBuilder {
    protected $size;

    protected $pepperoni = true;
    protected $cheeze = true;
    protected $lettuce = true;
    protected $tomato = false;

    public function __construct(int $size) {
        $this->size = $size;
    }
    
    public function addPepperoni() {
        $this->pepperoni = true;
        return $this;
    }
    
    public function addLettuce() {
        $this->lettuce = true;
        return $this;
    }
    
    public function addTomato() {
        $this->tomato = true;
        return $this;
    }
    
    public function build() : Burger {
        // creational logic
        return $burger;
    }
}
```
And then it can be used as:

```php
$burger = (new BurgerBuilder(14))
                    ->addPepperoni();
                    ->addLettuce();
                    ->addTomato();
                    ->build();
```

**When to use?**
When there could be several flavors of an object and to avoid the constructor telescoping. The key difference from the factory pattern is that; factory pattern is to be used when the creation is a one step process while builder pattern is to be used when the creation is a multi step process.

Prototype Pattern
-----------------
Real World Example
> Remember dolly? The sheep that was cloned! Lets not get into the details but the key point here is that it is all about cloning

In plain words
> Create object based on an existing object through cloning.

Wikipedia says
> The prototype pattern is a creational design pattern in software development. It is used when the type of objects to create is determined by a prototypical instance, which is cloned to produce new objects.

In short, it allows you to create a copy of an existing object and modify it to your needs, instead of going through the trouble of creating an object from scratch and setting it up.

**Programmatic Example**
In PHP, it can be easily done using `clone`
  
```php
class Sheep {
    protected $name;
    protected $category;

    public function __construct(string $name, string $category = 'Mountain Sheep') {
        $this->name = $name;
        $this->category = $category;
    }
    
    public function setName(string $name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setCategory(string $category) {
        $this->category = $category;
    }

    public function getCategory() {
        return $this->category;
    }
}
```
Then it can be cloned like below
```php
$original = new Sheep('Jolly');
echo $original->getName(); // Jolly
echo $original->getCategory(); // Mountain Sheep

// Clone and modify what is required
$cloned = clone $original;
$cloned->setName('Dolly');
echo $cloned->getName(); // Dolly
echo $cloned->getCategory(); // Mountain sheep
```

Also you could use the magic method `__clone` to modify the cloning behavior.

**When to use?**
When an object is required that is similar to existing object or when the creation would be expensive as compared to cloning.

Singleton pattern
-----------------
Real World Example
> There can only be one president of a country at a time. The same president has to be brought to action, whenever duty calls. President here is singleton.

In plain words
> Ensures that only one object of a particular class is every created.

Wikipedia says
> In software engineering, the singleton pattern is a software design pattern that restricts the instantiation of a class to one object. This is useful when exactly one object is needed to coordinate actions across the system.

Singleton pattern is actually considered an anti-pattern and overuse of it should be avoided. It is not necessarily bad and could have some valid use-cases but should be used with caution because it introduces a global state in your application and change to it in one place could affect in the other areas and it could become pretty difficult to debug. The other bad thing about them is it makes your code tightly coupled plus it mocking the singleton could be difficult.

**Programmatic Example**
To create a singleton, make the constructor private, disable cloning, disable extension and create a static variable to house the instance
```php
final class President {
    private static $instance;

    private function __construct() {
        // Hide the constructor
    }
    
    public static function getInstance() : President {
        if ($this->instance) {
            return $this->instance;
        }
        
        $this->instance = new President();
        return $this->instance;
    }
    
    private function __clone() {
        // Disable cloning
    }
}
```
Then in order to use
```php
$president1 = President::getInstance();
$president2 = President::getInstance();

var_dump($president1 === $president2); // true
```

Structural Design Patterns
==========================
In plain words
> Structural patterns are mostly concerned with object composition or in other words how the entities can use each other

Wikipedia says
> In software engineering, structural design patterns are design patterns that ease the design by identifying a simple way to realize relationships between entities.
  
 * [Adapter](#adapter)
 * [Bridge](#bridge)
 * [Composite](#composite)
 * [Decorator](#decorator)
 * [Facade](#facade)
 * [Flyweight](#flyweight)
 * [Proxy](#proxy)
 * [Registry](#registry)

Adapter
-------
Real World Example
> Consider that you have some pictures in your memory card and you need to transfer them to your computer. In order to transfer them you need some kind of adapter that is compatible with your computer ports so that you can attach memory card to your computer. In this case card reader is an adapter.
> Another example would be the famous power adapter; a three legged plug can't be connected to a two pronged outlet, it needs to use a power adapter that makes it compatible with the two pronged outlet.
> Yet another example would be a translator translating words spoken by one person to another

In plain words
> Adapter pattern lets you wrap an otherwise incompatible object in an adapter to make it compatible with another class.

Wikipedia says
> In software engineering, the adapter pattern is a software design pattern that allows the interface of an existing class to be used as another interface. It is often used to make existing classes work with others without modifying their source code.

**Programmatic Example**
Consider a game where there is a hunter and he hunts lions.

First we have an interface `Lion` that all types of lions have to implement

```php
interface Lion {
    public function roar();
}

class AfricanLion implements Lion {
    public function roar() {}
}

class AsianLion implements Lion {
    public function roar() {}
}
```
And hunter expects any implementation of `Lion` interface to hunt.
```php
class Hunter {
    public function hunt(Lion $lion) {
    }
}
```

Now let's say we have to add a `WildDog` in our game so that hunter can hunt that also. But we can't do that directly because dog has a different interface. To make it compatible for our hunter, we will have to create an adapter that is compatible
 
```php
// This needs to be added to the game
class WildDog {
    public function bark() {}
}

// Adapter around wild dog to make it compatible with our game
class WildDogAdapter implements Lion {
    protected $dog;

    public function __construct(WildDog $dog) {
        $this->dog = $dog;
    }
    
    public function roar() {
        $this->dog->bark();
    }
}
```
And now the `WildDog` can be used in our game using `WildDogAdapter`.

```php
$wildDog = new WildDog();
$wildDogAdapter = new WildDogAdapter($wildDog);

$hunter = new Hunter();
$hunter->hunt($wildDogAdapter);
```

Bridge
------
Real World Example
> Consider you have a website with different pages and you are supposed to allow the user to change the theme. What would you do? Create multiple copies of each of the pages for each of the themes or would you just create separate theme and load them based on the user's preferences? Bridge pattern allows you to do the second i.e.

![](http://i.imgur.com/3vgNH3p.png?2)

In Plain Words
> Bridge pattern is about preferring composition over inheritance. Implementation details are pushed from a hierarchy to another object with a separate hierarchy.

Wikipedia says
> The bridge pattern is a design pattern used in software engineering that is meant to "decouple an abstraction from its implementation so that the two can vary independently"

**Programmatic Example**

Translating our WebPage example from above. Here we have the `WebPage` hierarchy

```php
interface WebPage {
    public function __construct(Theme $theme);
    public function getContent();
}

class About implements WebPage {
    protected $theme;
    
    public function __construct(Theme $theme) {
        $this->theme = $theme;
    }
    
    public function getContent() {
        return "About page in " . $this->theme->getColor();
    }
}

class Careers implements WebPage {
   protected $theme;
   
   public function __construct(Theme $theme) {
       $this->theme = $theme;
   }
   
   public function getContent() {
       return "Careers page in " . $this->theme->getColor();
   } 
}
```
And the separate theme hierarchy
```php
interface Theme {
    public function getColor();
}

class DarkTheme {
    public function getColor() {
        return 'Dark Black';
    }
}
class LightTheme {
    public function getColor() {
        return 'Off white';
    }
}
class AquaTheme {
    public function getColor() {
        return 'Light blue';
    }
}
```
And both the hierarchies
```php
$darkTheme = new DarkTheme();

$about = new About($darkTheme);
$careers = new Careers($darkTheme);

echo $about->getContent(); // "About page in Dark Black";
echo $careers->getContent(); // "Careers page in Dark Black";
```

Composite Pattern
-----------------

Real World Example

> Every organization is composed of employees. Each of the employees has same feautres i.e. has a salary, has some responsibilities, may or may not report to someone, may or may not have some subordinates etc.

In plain words
> Composite pattern lets clients to treat the individual objects in a uniform manner.

Wikipedia says
> In software engineering, the composite pattern is a partitioning design pattern. The composite pattern describes that a group of objects is to be treated in the same way as a single instance of an object. The intent of a composite is to "compose" objects into tree structures to represent part-whole hierarchies. Implementing the composite pattern lets clients treat individual objects and compositions uniformly.

**Programmatic Example**

Taking our employees example from above. Here we have different employee types

```php

interface Employee {
    public function __construct(string $name, float $salary);
    public function getName() : string;
    public function setSalary(float $salary);
    public function getSalary() : float;
    public function getRoles()  : array;
}

class Developer implements Employee {

    protected $salary;
    protected $name;

    public function __construct(string $name, float $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName() : string {
        return $this->name;
    }

    public function setSalary(float $salary) {
        $this->salary = $salary;
    }

    public function getSalary() : float {
        return $this->salary;
    }

    public function getRoles() : array {
        reutrn $this->roles
    }
}

class Designer implements Employee {

    protected $salary;
    protected $name;

    public function __construct(string $name, float $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName() : string {
        return $this->name;
    }

    public function setSalary(float $salary) {
        $this->salary = $salary;
    }

    public function getSalary() : float {
        return $this->salary;
    }

    public function getRoles() : array {
        reutrn $this->roles
    }
}
```

Then we have an organization which consists of several different types of employees

```php
class Organization {
    
    protected $employees;

    public function addEmployee(Employee $employee) {
        $this->employees[] = $employee;
    }

    public function getNetSalaries() : float {
        $netSalary = 0;

        foreach ($this->employees as $employee) {
            $netSalary += $employee->getSalary();
        }

        return $netSalary;
    }
}
```

And then it can be used as

```php
// Prepare the employees
$john = new Developer('John Doe', 12000);
$jane = new Designer('Jane', 10000);

// Add them to organization
$organization = new Organization();
$organization->addEmployee($john);
$organization->addEmployee($jane);

echo "Net salaries: " . $organization->getNetSalaries(); // Net Salaries: 22000
```

Decorator
-------------

Real World Example

> Imagine you run a car service shop offering multiple services. Now how do you calculate the bill to be charged? You pick one service and dynamically keep adding to it the prices for the provided services till you get the final cost. Here each type of service is a decorator.

In plain words
> Decorator pattern lets you dynamically change the behavior of an object at run time by wrapping them in an object of a decorator class.

Wikipedia says
>

**Programmatic Example**

Lets take cofee for example. First of all we have a simple coffee implementing the coffee interface

```php
interface Coffee {
    public function getCost();
    public function getDescription();
}

class SimpleCoffee implements Coffee {

    public function getCost() {
        return 10;
    }

    public function getDescription() {
        return 'Simple coffee';
    }
}
```
We want to make the cofee extendible to allow options to modify it if required. Lets make some add-ons (decorators)
```php
class MilkCoffee implements Coffee {
    
    protected $coffee;

    public function __construct(Coffee $coffee) {
        $this->coffee = $coffee;
    }

    public function getCost() {
        return $this->coffee->getCost() + 2;
    }

    public function getDescriptoin() {
        return $this->coffee->getDescription() + ', milk';
    }
}

class WhipCoffee implements Coffee {

    protected $coffee;

    public function __construct(Coffee $coffee) {
        $this->coffee = $coffee;
    }

    public function getCost() {
        return $this->coffee->getCost() + 5;
    }

    public function getDescriptoin() {
        return $this->coffee->getDescription() + ', whip';
    }
}

class VanillaCoffee implements Coffee {

    protected $coffee;

    public function __construct(Coffee $coffee) {
        $this->coffee = $coffee;
    }

    public function getCost() {
        return $this->coffee->getCost() + 3;
    }

    public function getDescriptoin() {
        return $this->coffee->getDescription() + ', vanilla';
    }
}

```

Lets make a coffee now

```php
$someCoffee = new SimpleCoffee();
echo $someCoffee->getCost(); // 10
echo $someCoffee->getDescription(); // Simple Coffee

$someCoffee = new MilkCoffee($someCoffee);
echo $someCoffee->getCost(); // 12
echo $someCoffee->getDescription(); // Simple Coffee, milk

$someCoffee = new WhipCoffee($someCoffee);
echo $someCoffee->getCost(); // 17
echo $someCoffee->getDescription(); // Simple Coffee, milk, whip

$someCoffee = new VanillaCoffee($someCoffee);
echo $someCoffee->getCost(); // 20
echo $someCoffee->getDescription(); // Simple Coffee, milk, whip, vanilla
```

Facade Pattern
----------------

Real World Example
> How do you turn on the computer? "Hit the power button" you say! That is what you believe because you are using a simple interface that computer provides on the outside, internally it has to do a lot of stuff to make it happen. This simple interface to the complex subsystem is a facade.

In plain words
> Facade pattern provides a simplified interface to a complex subsystem.

Wikipedia says
> 

**Programmatic Example**
Taking our computer example from above. Here we have the computer class

```php
class Computer {

    public function getElectricShock() {
        echo "Ouch!";
    }

    public function makeSound() {
        echo "Beep beep!";
    }

    public function showLoadingScreen() {
        echo "Loading..";
    }

    public function bam() {
        echo "Ready to be used!";
    }

    public function closeEverything() {
        echo "Bup bup bup buzzzz!";
    }

    public function sooth() {
        echo "Zzzzz";
    }

    public function pullCurrent() {
        echo "Haaah!";
    }
}
```
Here we have the facade
```php
public function ComputerFacade
{
    protected $computer;

    public function __construct(Computer $computer) {
        $this->computer = $computer;
    }

    public function turnOn() {
        $this->computer->getElectricShock();
        $this->computer->makeSound();
        $this->computer->showLoadingScreen();
        $this->computer->bam();
    }

    public function turnOff() {
        $this->computer->closeEverything();
        $this->computer->pullCurrent();
        $this->computer->sooth();
    }
}
```
Now to use the facade
```php
$computer = new ComputerFacade(new Computer());
$computer->turnOn(); // Ouch! Beep beep! Loading.. Ready to be used!
$compuer->turnOff(); // Bup bup buzzz! Haah! Zzzzz
```

Flyweight
---------

Real World Example
> Did you ever have fresh tea from some stall? They often make more than one cup that you demanded and save the rest for any other customer so to save the resources e.g. gas etc. Flyweight pattern is all about that i.e. sharing.

In plain words
> It is used to minimize memory usage or computational expenses by sharing as much as possible with similar objects.

Wikipedia says
> 

**Programmatic example**
Translating our tea example from above. First of all we have tea types and tea maker

```php
// Anything that will be cached is flyweight. 
// Types of tea here will be flyweights.
class KarakTea {
}

// Acts as a factory and saves the tea
class TeaMaker {
    protected $availableTea = [];

    public function make($preference) {
        if (empty($this->availableTea[$preference])) {
            $this->availableTea[$preference] = new KarakTea();
        }

        return $this->availableTea[$preference];
    }
}
```

Then we have the `TeaShop` which takes orders and serves them

```php
class TeaShop {
    
    protected $orders;
    protected $teaMaker;

    public function __construct(TeaMaker $teaMaker) {
        $this->teaMaker = $teaMaker;
    }

    public function takeOrder(string $teaType, int $table) {
        $this->orders[$table] = $this->teaMaker->make($teaType);
    }

    public function serve() {
        foreach($this->orders as $table => $tea) {
            echo "Serving tea to table# " . $table;
        }
    }
}
```
And it can be used as below

```php
$shop = new TeaShop();

$shop->takeOrder('less sugar', 1);
$shop->takeOrder('more milk', 2);
$shop->takeOrder('without sugar', 5);

$shop->serve();
// Serving tea to table# 1
// Serving tea to table# 2
// Serving tea to table# 5
```

Proxy
-------------------
Real World Example
> Have you ever used access card to enter a door? There are multiple options to open that door i.e. it can be opened either using access card or by pressing a button that bypasses the security. Here door's main functionality is to open but there is a proxy added on top of it to add some additional functionality to the door. Let me better explain it using the code example below.

In plain words
> In proxy pattern a class represents the functionality of another class.

Wikipedia says
>

**Programmatic Example**
Taking our security door example from above. Firstly we have the door interface and an implementation of door

```php
interface Door {
    public function open();
    public function close();
}

class LabDoor implements Door {
    public function open() {
        echo "Opening lab door";
    }

    public function close() {
        echo "Closing the lab door";
    }
}
```
Then we have a proxy to secure any doors that we want
```php
class Security {
    protected $door;

    public function __construct(Door $door) {
        $this->door = $door;
    }

    public function open($password) {
        if ($this->authenticate($password)) {
            $this->door->open();
        }

        echo "Big no! It ain't possible.";
    }

    public function authenticate($password) {
        return $password === '$ecr@t'
    }

    public function close() {
        $this->door->close();
    }
}
```
And here is how it can be used
```php
$door = new Security(new LabDoor());
$door->open('invalid'); // Big no! It ain't possible.

$door->open('$ecr@t'); // Opening lab door
$door->close('Closing lab door');
```
Yet another example would be some sort of datamapper implementation. For example, I recently made an ODM (Object Data Mapper) for mongodb using this pattern where I wrote a proxy around mongo classes while utilizing the magic method `__call`. All the method calls were proxied to the original mongo class and result retrieved was returned as it is but in case of `find` or `findOne` data was mapped to the required class objects and the object was returned instead of `Cursor`.
