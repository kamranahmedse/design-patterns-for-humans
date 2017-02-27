<?php

namespace designPatternsForHumans\structural\Flyweight;


class TeaShop
{

    protected $teaMaker;
    protected $orders;

    public function __construct(TeaMaker $teaMaker)
    {
        $this->teaMaker = $teaMaker;
    }

    /**
     * @param string $teaType
     * @param int $table
     */
    public function takeOrder($teaType, $table)
    {
        $this->orders[$table] = $this->teaMaker->make($teaType);
    }

    public function serve()
    {
        foreach ($this->orders as $table => $order) {
            echo 'Serving tea to table # ' . $table . PHP_EOL;
        }
    }


}
