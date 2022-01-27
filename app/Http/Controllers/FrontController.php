<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;

class FrontController extends Controller
{
    /**
     * @return
     */
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->get();

        return view('index', compact('products'));
    }

    public function product($slug, $id)
    {
        $product = Product::findOrFail($id);

        return view('product', compact('product'));
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
