<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FrontController extends Controller
{
    /**
     * @return
     */
    public function index()
    {
        return view('index');
    }

    public function image($path)
    {
        if (! $path) {
            return;
        }

        $content = Storage::get("products/$path");

        $response = response()->make($content, 200);
        $response->header('Content-Type', 'image/png');
        return $response;
    }
}
