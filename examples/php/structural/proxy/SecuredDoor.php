<?php

namespace design_patterns\structural\proxy;

class SecuredDoor
{
    private Door $door;

    public function __construct(Door $door)
    {
        $this->door = $door;
    }

    public function open(string $password): string
    {
        if (!$this->authenticate($password)) {
            return "Big no! It ain't possible.";
        }

        return $this->door->open();
    }

    public function authenticate(string $password): bool
    {
        return $password === '$ecr@t';
    }

    public function close(): string
    {
        return $this->door->close();
    }
}
