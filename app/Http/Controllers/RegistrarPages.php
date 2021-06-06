<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrarPages extends Controller
{
    public function dashboard()
    {
        return view('pages.registrar.dashboard');
    }
    public function request()
    {
        return view('pages.registrar.requests');
    }
    public function documents()
    {
        return view('pages.registrar.documents');
    }
   
}
