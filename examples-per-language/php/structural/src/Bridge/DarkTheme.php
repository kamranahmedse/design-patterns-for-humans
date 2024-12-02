<?php

namespace designPatternsForHumans\structural\Bridge;


class DarkTheme implements Theme
{

    public function getColor()
    {
        return 'Dark Black';
    }
}
