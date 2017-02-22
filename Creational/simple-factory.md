🏠 Simple Factory
--------------
Real world example
> Consider, you are building a house and you need doors. It would be a mess if every time you need a door, you put on your carpenter clothes and start making a door in your house. Instead you get it made from a factory.

In plain words
> Simple factory simply generates an instance for client without exposing any instantiation logic to the client

Wikipedia says
> In object-oriented programming (OOP), a factory is an object for creating other objects – formally a factory is a function or method that returns objects of a varying prototype or class from some method call, which is assumed to be "new".

**Programmatic Example**

First of all we have a door interface and the implementation
```php
interface Door {
    public function getWidth() : float;
    public function getHeight() : float;
}

class WoodenDoor implements Door {
    protected $width;
    protected $height;

    public function __construct(float $width, float $height) {
        $this->width = $width;
        $this->height = $height;
    }
    
    public function getWidth() : float {
        return $this->width;
    }
    
    public function getHeight() : float {
        return $this->height;
    }
}
```
Then we have our door factory that makes the door and returns it
```php
class DoorFactory {
   public static function makeDoor($width, $height) : Door {
       return new WoodenDoor($width, $height);
   }
}
```
And then it can be used as
```php
$door = DoorFactory::makeDoor(100, 200);
echo 'Width: ' . $door->getWidth();
echo 'Height: ' . $door->getHeight();
```

**When to Use?**

When creating an object is not just a few assignments and involves some logic, it makes sense to put it in a dedicated factory instead of repeating the same code everywhere. 
