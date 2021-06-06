<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPages extends Controller
{
    public function dashboard()
    {
        return view('pages.admin.dashboard');
    }

    public function user()
    {
        return view('pages.admin.user');

        
    }
    public function campus()
    {
        return view('pages.admin.campus');

    }
}
