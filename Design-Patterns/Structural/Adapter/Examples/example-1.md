
The Target defines the domain-specific interface used by the client code.

```
<?php

namespace RefactoringGuru\Adapter\Conceptual;

class Target
{
    public function request(): string
    {
        return "Target: The default target's behavior.";
    }
}

```

 The Adaptee contains some useful behavior, but its interface is incompatible with the existing client code. The Adaptee needs some adaptation before the client code can use it.
```
class Adaptee
{
    public function specificRequest(): string
    {
        return ".eetpadA eht fo roivaheb laicepS";
    }
}

```

The Adapter makes the Adaptee's interface compatible with the Target's interface.
```
class Adapter extends Target
{
    private $adaptee;

    public function __construct(Adaptee $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    public function request(): string
    {
        return "Adapter: (TRANSLATED) " . strrev($this->adaptee->specificRequest());
    }
}

```
The client code supports all classes that follow the Target interface.
```
function clientCode(Target $target)
{
    echo $target->request();
}


echo "Client: I can work just fine with the Target objects:\n";
$target = new Target();
clientCode($target);
echo "\n\n";

$adaptee = new Adaptee();
echo "Client: The Adaptee class has a weird interface. See, I don't understand it:\n";
echo "Adaptee: " . $adaptee->specificRequest();
echo "\n\n";

echo "Client: But I can work with it via the Adapter:\n";
$adapter = new Adapter($adaptee);
clientCode($adapter);
```

OUTPUT
<pre>
Client: I can work just fine with the Target objects:
Target: The default target's behavior.

Client: The Adaptee class has a weird interface. See, I don't understand it:
Adaptee: .eetpadA eht fo roivaheb laicepS

Client: But I can work with it via the Adapter:
Adapter: (TRANSLATED) Special behavior of the Adaptee.
</pre>