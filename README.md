Design Patterns Explained with Fables
=====================================
> Ultra-simplified explanation to design patterns!

Design patterns is something that can easily make anyone's mind wobble. Here I try to make them stick in to your (and maybe mine?!) mind by explaining them in the *simplest* way possible. 

## Table of Contents
* [Design patterns](#design-patterns) 
* [Creational](#creational)
* [Structural](#structural)
* [Behavioral](#behavioral)

Design Patterns
===============
In plain words
> Solutions to recurring problems. Guidelines on how to tackle certain problems.
 
Wikipedia Says
> In software engineering, a software design pattern is a general reusable solution to a commonly occurring problem within a given context in software design. It is not a finished design that can be transformed directly into source or machine code. It is a description or template for how to solve a problem that can be used in many different situations.  

They are not classes, packages or libraries that you can plug into your application and wait for the magic to happen. These are, rather, guidelines on how to tackle certain problems in certain situations. 

> - They are not a silver bullet to all your problems. You should not try to force them.
> - Keep in mind that design patterns are solutions **to** problems, not solution **finding** problem
> - If used in a correct place in a correct manner, they can prove to be a savior; or else it can result in a horrible mess of a code.

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
**Real Word**
> Consider, you are building a house and you need doors. It would be a mess if every time you need a door, you put on your carpenter clothes and start making a door in your house. Instead you get it made from a factory.

**In plain words**
> Simple factory simply generates an instance for client without exposing any instantiation logic to the client

**Wikipedia says**
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
**Real World**
> Consider the case of a hiring manager. It is impossible for one person to interview for each of the positions. Based on the job opening, she has to decide and delegate the interview steps to different people. 

**In Plain Words**
> It provides a way to delegate the instantiation logic to child classes. 

**Wikipedia says**
> In class-based programming, the factory method pattern is a creational pattern that uses factory methods to deal with the problem of creating objects without having to specify the exact class of the object that will be created. This is done by creating objects by calling a factory method—either specified in an interface and implemented by child classes, or implemented in a base class and optionally overridden by derived classes—rather than by calling a constructor.
 
 **Programmatic Example**
 Taking my hiring manager example above:
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
**Real World**
> Extending our door example from (Simple Factory)[#simple-factory]. Based on your needs you might get a wooden door from a wooden door shop, iron door from an iron shop or a PVC door from the relevant shop. Plus you might need a guy with different kind of specialities to fit the door, for example a carpenter for wooden door, welder for iron door etc. As you can see there is a dependency between the doors now, wooden door needs carpenter, iron door needs a welder etc.

**In plain words**
> A factory of factories; a factory that groups the individual but related/dependent factories together without specifying their concrete classes. 
  
**Wikipedia says**
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

Builder Pattern
--------------------------------------------
