<?php

namespace designPatternsForHumans\creational\FactoryMethod;


class DevelopmentManager extends HiringManager
{

    public function makeInterviewer()
    {
        return new Developer();
    }
}
