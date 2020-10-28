<?php

namespace App\Http\Controllers\Base;

class BackendController extends BaseController
{
    protected $_area = 'backend';

    public function index()
    {

        return $this->render();
    }

    public function create()
    {

        return $this->render();
    }

    public function store()
    {

    }

    public function show($id)
    {

        return $this->render();
    }

    public function edit($id)
    {

        return $this->render();
    }

    public function update($id)
    {

    }

    public function destroy($id)
    {

    }
}
