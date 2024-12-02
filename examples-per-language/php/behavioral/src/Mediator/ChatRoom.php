<?php

namespace designPatternsForHumans\behavioral\Mediator;


class ChatRoom implements ChatRoomMediator
{

    public function showMessage(User $user, $message)
    {
        $time = date('M d, Y H:i');
        $sender = $user->getName();

        echo $time . '[' . $sender . ']:' . $message . PHP_EOL;
    }
}
