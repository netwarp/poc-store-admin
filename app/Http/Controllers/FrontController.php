<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * @return
     */
    public function index()
    {
        return view('index');
    }
}
