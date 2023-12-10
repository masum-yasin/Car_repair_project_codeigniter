<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ServiceController extends BaseController
{
    public function index()
    {
        return view('service/index');
    }
    public function create(){
        return view('service/create');
    }
}
