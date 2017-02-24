<?php
/**
 * Created by PhpStorm.
 * User: goran.erhartic
 * Date: 23/2/2017
 * Time: 12:57 PM
 */
namespace GE\Person;

class Manager extends AbstractHuman implements ManagerInterface
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

    public function iterateProperties()
    {
        foreach ($this as $key => $value) {
            if (is_array($value)) {
                $a = implode(',', $value);
                echo "$key => $a<br>";

            } else {
                echo "$key => $value<br>";
            }
        }
        echo "<br>";
    }
}