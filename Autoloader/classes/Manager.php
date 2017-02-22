<?php
/**
 * Created by PhpStorm.
 * User: goran.erhartic
 * Date: 22/2/2017
 * Time: 10:11 AM
 */

class Manager extends Human implements iManager
{
    private $projects;

    /**
     * Manager constructor.
     * @param $projects
     * @param $name
     * @param $age
     */
    public function __construct($name, $age, $projects)
    {
        parent::__construct($name, $age);
        $this->projects = $projects;
    }

    /**
     * @return mixed
     */
    public function getProject()
    {
        return $this->projects;
    }

    /**
     * @param mixed $projects
     */
    public function setProject($projects)
    {
        $this->projects = $projects;
    }

    public function iterate_properties(){
        foreach ($this as $key => $value) {
            if(is_array($value)){
                $a = implode(',', $value);
                echo "$key => $a<br>";

            }else {
                echo "$key => $value<br>";
            }
        }
        echo "<br>";
    }
}