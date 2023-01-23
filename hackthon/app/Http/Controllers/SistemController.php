<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SistemController extends Controller
{
    public function index()
    {


    }

    public function dashboardAdmin()
    {
        return view('admin.dashboard');
    }
}
