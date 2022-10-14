<?php

namespace design_patterns\mediator;

interface ChatRoomMediator
{
    public function showMessage(User $user, string $message): string;
}
