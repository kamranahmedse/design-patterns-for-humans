<?php

namespace designPatternsForHumans\structural\Proxy;


class LabDoor implements Door
{

    public function open()
    {
        echo 'Opening lab door ' . PHP_EOL;
    }

    public function close()
    {
        echo 'Closing lab door ' . PHP_EOL;
    }
}
