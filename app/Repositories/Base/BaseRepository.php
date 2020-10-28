<?php

namespace App\Repositories\Base;

abstract class BaseRepository
{
    protected $_model;

    public function __construct()
    {
        $this->setModel();
    }

    abstract public function model();

    public function setModel()
    {
        $this->_model = app()->make($this->model());
    }

    public function getModel()
    {
        return $this->_model;
    }

    /**
     * __call() is called when you call method but this method is not exist in BaseRepository
     * @param $name (method name)
     * @param $arguments (params of method)
     * @return mixed
     */
    public function __call($name, array $arguments)
    {
        return call_user_func_array([$this->getModel(), $name], $arguments);
        // ~ call_user_func_array($this->getModel()->{$name}, $arguments)
        // call_user_func_array('functionA', ['param1', 'param2']) ~ functionA('param1', 'param2')
    }
}
