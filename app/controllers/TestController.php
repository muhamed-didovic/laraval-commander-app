<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 1.1.2015
 * Time: 19:26
 */

namespace app\controllers;


/**
 * Class TestController
 * @package app\controllers
 */
class TestController {

    /**
     * @var
     */
    protected $_name;
    /**
     * @var
     */
    protected $_age;

    /**
     * @param $_name
     * @param $_age
     */
    function __construct($_name, $_age)
    {
        if (isset($x)) {
            $x = new Person;
        }
        $this->_name = $_name;
        $this->_age = $_age;

    }


    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->_age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->_age = $age;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->_name = $name;
    }
}