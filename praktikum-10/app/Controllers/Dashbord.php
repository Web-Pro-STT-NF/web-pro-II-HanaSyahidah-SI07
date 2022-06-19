<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashbord extends BaseController
{
    public function index()
    {
        return view('dashbord/index');
    }
}
