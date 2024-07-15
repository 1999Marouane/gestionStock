<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProductController extends Controller
{ public function index()
{
    $products = Product::all();
    return view('all.Products.index', compact('products'));
}

    public function create()
    {
        $categories = Categorie::all();
        $suppliers = Supplier::all();
        return view('all.Products.create',compact(['suppliers','categories']));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
            'category_id' => 'required|exists:categories,id',
            'supplier_id' => 'required|exists:suppliers,id',
            'cost_price' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'quantity_in_stock' => 'required|integer',
        ]);

        Product::create($validatedData);
        return redirect()->route('product.index')->with('success', 'Product created successfully.');
    }

    public function show(Product $product)
    {
        return view('all.Products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = Categorie::all();
        $suppliers = Supplier::all();
        return view('all.Products.edit', compact(['product','categories','suppliers']));
    }

    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
            'category_id' => 'required|exists:categories,id',
            'supplier_id' => 'required|exists:suppliers,id',
            'cost_price' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'quantity_in_stock' => 'required|integer',
        ]);

        $product->update($validatedData);
        return redirect()->route('product.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Product deleted successfully.');
    }
}
