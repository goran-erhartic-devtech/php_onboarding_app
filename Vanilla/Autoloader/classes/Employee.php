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
    protected $project;
    protected $is_active;

    /**
     * DepartmentManager constructor.
     * @param $name
     * @param $age
     * @param $department
     * @param $project
     * @param $is_active
     */
    public function __construct($name, $age, $department, $project, $is_active)
    {
        parent::__construct($name, $age);
        $this->department = $department;
        $this->project = $project;
        $this->is_active = $is_active;
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

    /**
     * @return mixed
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * @param mixed $project
     */
    public function setProject($project)
    {
        $this->project = $project;
    }

    /**
     * @return mixed
     */
    public function getIsActive()
    {
        return $this->is_active;
    }

    /**
     * @param mixed $is_active
     */
    public function setIsActive($is_active)
    {
        $this->is_active = $is_active;
    }



    public function iterate_properties(){
        foreach ($this as $key => $value) {
            echo "$key => $value<br>";
        }
        echo "<br>";
    }
}