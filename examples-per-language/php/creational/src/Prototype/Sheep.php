<?php

namespace designPatternsForHumans\creational\Prototype;


class Sheep
{

    protected $name;
    protected $category;

    public function __construct($name, $category = 'Mountain Sheep')
    {
        $this->name = $name;
        $this->category = $category;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param string $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function getCategory()
    {
        return $this->category;
    }

}