<?php

namespace design_patterns\behavioral\mediator;

class User
{
    private string $name;
    private ChatRoomMediator $chatMediator;

    public function __construct(string $name, ChatRoomMediator $chatMediator)
    {
        $this->name = $name;
        $this->chatMediator = $chatMediator;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function send(string $message): string
    {
        return $this->chatMediator->showMessage($this, $message);
    }
}
