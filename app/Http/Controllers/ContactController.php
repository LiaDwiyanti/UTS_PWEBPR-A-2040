<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('new.login');
    }

    public function cont()
    {
        return view('new.contact');
    }
    
    public function reg()
    {
        return view('new.register');
    }
}
