<?php

namespace design_patterns\composite;

interface Employee
{
    public function __construct(string $name, float $salary);
    public function getName(): string;
    public function setSalary(float $salary): void;
    public function getSalary(): float;
    public function getRoles(): array;
}
