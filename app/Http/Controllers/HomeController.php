<?php

namespace Hexotic\Http\Controllers;

use Illuminate\Http\Request;

use Hexotic\Http\Requests;

class HomeController extends Controller
{
    // Return homescreen to user
    public function index()
    {
        return view('pages.home');
    }
}
