<?php

namespace design_patterns\behavioral\mediator;

interface ChatRoomMediator
{
    public function showMessage(User $user, string $message): string;
}
