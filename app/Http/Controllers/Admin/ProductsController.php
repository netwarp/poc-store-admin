<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Support\Str;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $products = Product::orderBy('id', 'desc')->get();

        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        return view('admin.products.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required | max:255',
            'description' => 'required',
            'image' => 'mimes:jpg,png',
            'price' => 'required'
        ]);

        $title = $request->get('title');
        $description = $request->get('description');
        $image = $request->file('image');
        $price = $request->get('price');

        $data = [
            'title' => $title,
            'description' => $description,
            'price' => (float) $price
        ];

        if ($request->file('image')) {
            $name = $image->hashName();
            Storage::put("products", $image);

            $data['image'] = $name;
        }

        Product::create($data);

        return redirect()->action([ProductsController::class, 'index'])->with('success', 'Product successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('admin.products.form', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $title = $request->get('title');
        $description = $request->get('description');
        $image = $request->file('image');
        $price = $request->get('price');

        $data = [
            'title' => $title,
            'description' => $description,
            'price' => (float) $price
        ];

        if ($request->file('image')) {
            $name = $image->hashName();
            Storage::put("products", $image);

            $data['image'] = $name;
        }

        $product->update($data);

        return redirect()->action([ProductsController::class, 'index'])->with('success', 'Product successfully update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if ($product->image) {
            $image = $product->image;
            Storage::delete("/products/{$image}");
        }

        $product->delete();

        return redirect()->action([ProductsController::class, 'index'])->with('success', 'Product successfully deleted');
    }
}
