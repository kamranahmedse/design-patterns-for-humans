<?php

namespace designPatternsForHumans\creational\FactoryMethod;


class MarketingManager extends HiringManager
{

    public function makeInterviewer()
    {
        return new CommunityExecutive();
    }
}
