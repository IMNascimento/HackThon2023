<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AgendaController;

class SistemController extends Controller
{
    public function index()
    {


    }

    public function dashboardAdmin()
    {
        return view('admin.dashboard');
    }

    public function indexUser()
    {
        return view('user.index');
    }
}
