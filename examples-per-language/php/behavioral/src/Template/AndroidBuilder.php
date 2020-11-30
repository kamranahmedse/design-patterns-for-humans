<?php

namespace designPatternsForHumans\behavioral\Template;


class AndroidBuilder extends Builder
{

    public function test()
    {
        echo 'Running Android tests' . PHP_EOL;
    }

    public function lint()
    {
        echo 'Linting the Android code' . PHP_EOL;
    }

    public function assemble()
    {
        echo 'Assembling the Android build' . PHP_EOL;
    }

    public function deploy()
    {
        echo 'Deploying Android build to server' . PHP_EOL;
    }
}
