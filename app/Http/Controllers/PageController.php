<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function photography()
    {
        return view('photography');
    }

    
    public function video()
    {
        return view('video');
    }


    public function training()
    {
        return view('training');
    }


    public function instrumentation()
    {
        return view('instrumentation');
    }

    public function services()
    {
        return view('service');


    }

//Dashboard
public function dashboard()
{
    return view('dashboard');
}

//forms page

public function serviceform()
    {
        return view('home2');
    
}

public function registernyscform()
    {
        return view('registernysc');
    
}
}