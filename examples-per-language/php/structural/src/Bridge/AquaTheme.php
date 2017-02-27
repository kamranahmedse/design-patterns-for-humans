<?php

namespace designPatternsForHumans\structural\Bridge;


class AquaTheme implements Theme
{

    public function getColor()
    {
        return 'Light blue';
    }
}
