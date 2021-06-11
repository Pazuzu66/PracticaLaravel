<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function solicitud()
    {
        return view('alumnos/solicitud');
    }
    public function personal()
    {
        return view('personal/personal');
    }
}
