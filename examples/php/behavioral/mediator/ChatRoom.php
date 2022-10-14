<?php

namespace design_patterns\behavioral\mediator;

class ChatRoom implements ChatRoomMediator
{
    private string $time = '';

    public function showMessage(User $user, string $message): string
    {
        $time = $this->getTime();
        $sender = $user->getName();

        return $time . ' [' . $sender . ']: ' . $message;
    }

    public function setTime(string $time): void
    {
        $this->time = $time;
    }

    private function getTime(): string
    {
        return $this->time ? : date('M d, H:i');
    }
}
