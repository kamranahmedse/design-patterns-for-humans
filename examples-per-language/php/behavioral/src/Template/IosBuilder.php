<?php

namespace designPatternsForHumans\behavioral\Template;


class IosBuilder extends Builder
{

    public function test()
    {
        echo 'Running Ios tests' . PHP_EOL;
    }

    public function lint()
    {
        echo 'Linting the Ios code' . PHP_EOL;
    }

    public function assemble()
    {
        echo 'Assembling the Ios build' . PHP_EOL;
    }

    public function deploy()
    {
        echo 'Deploying Ios build to server' . PHP_EOL;
    }
}
