<?php

namespace designPatternsForHumans\behavioral\Mediator;


interface ChatRoomMediator
{
    public function showMessage(User $user, $message);
}
