<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestorPages extends Controller
{
    public function dashboard()
    {
        return view('pages.requestor.dashboard');
    }
    public function myrequest()
    {
        return view('pages.requestor.myrequest');
    }

    public function requestviewstatus($id)
    {
        return view('pages.requestor.request-view-status',[
            'id' => $id
        ]);
        
    }
}
