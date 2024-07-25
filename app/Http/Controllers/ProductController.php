<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return view('product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name_product' => 'required',
            'price' => 'required',
            'category' => 'required',
            'stock' => 'required',
            'cover' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $product = new Product();
        $product->name_product = $request->name_product;
        $product->price = $request->price;
        $product->category = $request->category;
        $product->stock = $request->stock;
        $product->cover = $request->cover;

        //upload image
        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/product', $name);
            $product->cover = $name;
        }
        $product->save();

        return redirect()->route('product.index')
       ->with('success', 'Data Added Successfully!') ;
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $this->validate($request, [
            'name_product' => 'required',
            'price' => 'required',
            'category' => 'required',
            'stock' => 'required',
            'cover' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $product = new Product();
        $product->name_product = $request->name_product;
        $product->price = $request->price;
        $product->category = $request->category;
        $product->stock = $request->stock;
        $product->cover = $request->cover;

        //upload image
        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/product', $name);
            $product->cover = $name;
        }
        $product->save();

        return redirect()->route('product.index')
       ->with('success', 'Data Changed Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if (Auth::product()->id != $product->id) {
            $product->delete();
            return redirect()->route('product.index');
        }
        return redirect()->route('product.index');
    }
}
