<?php

namespace design_patterns\structural\flyweight;

class TeaShop
{
    private array $orders;
    private TeaMaker $teaMaker;

    public function __construct(TeaMaker $teaMaker)
    {
        $this->teaMaker = $teaMaker;
    }

    public function takeOrder(string $teaType, int $table): void
    {
        $this->orders[$table] = $this->teaMaker->make($teaType);
    }

    public function serve(): string
    {
        $output = '';
        foreach ($this->orders as $table => $tea) {
            $output .= "Serving tea to table {$table}...\n";
        }

        return $output;
    }
}
