<?php

namespace designPatternsForHumans\structural\Composite;


class Organization
{

    protected $employees;

    public function addEmployee(Employee $employee)
    {
        $this->employees[] = $employee;
    }

    public function getNetSalaries()
    {
        $netSalary = 0;

        /** @var Employee $employee */
        foreach ($this->employees as $employee) {
            $netSalary += $employee->getSalary();
        }

        return $netSalary;
    }

}