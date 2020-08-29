<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Base\FrontendController;

class HomeController extends FrontendController
{
    public function index()
    {
        return view('frontend.welcome');
    }
}
