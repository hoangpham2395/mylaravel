<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Base\BackendController;

class DashboardController extends BackendController
{
    public function index()
    {
        return $this->render();
    }
}
