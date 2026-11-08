<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function showIndex()
    {
        return view('home');
    }
}
