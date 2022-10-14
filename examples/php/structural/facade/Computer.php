<?php

namespace design_patterns\structural\facade;

class Computer
{
    public function getElectricShock(): string
    {
        return "Ouch!";
    }

    public function makeSound(): string
    {
        return "Beep beep!";
    }

    public function showLoadingScreen(): string
    {
        return "Loading..";
    }

    public function bam(): string
    {
        return "Ready to be used!";
    }

    public function closeEverything(): string
    {
        return "Bup bup bup buzzzz!";
    }

    public function sooth(): string
    {
        return "Zzzzz";
    }

    public function pullCurrent(): string
    {
        return "Haaah!";
    }
}
