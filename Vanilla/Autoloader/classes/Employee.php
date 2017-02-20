<?php

/**
 * Created by PhpStorm.
 * User: goran.erhartic
 * Date: 20/2/2017
 * Time: 10:57 AM
 */
class Employee extends Human implements iEmployee
{
    protected $department;

    /**
     * DepartmentManager constructor.
     * @param $name
     * @param $age
     * @param $department
     */
    public function __construct($name, $age, $department)
    {
        parent::__construct($name, $age);
        $this->department = $department;
    }

    /**
     * @return mixed
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * @param mixed $department
     */
    public function setDepartment($department)
    {
        $this->department = $department;
    }

    public function iterate_properties(){
        foreach ($this as $key => $value) {
            echo "$key => $value<br>";
        }
    }
}