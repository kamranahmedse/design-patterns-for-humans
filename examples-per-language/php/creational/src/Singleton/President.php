<?php

namespace designPatternsForHumans\creational\Singleton;


final class President
{

    private static $instance;

    private function __construct()
    {
        // Hide the constructor.
    }

    private function __clone()
    {
        // Disable cloning.
    }

    private function __wakeup()
    {
        // Disable unserialize.
    }

    // Only make a new instance it hasn't already been set, return the already
    // existing instance if it was already set.
    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

}

