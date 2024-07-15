<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class categorieController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        return view('all.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('all.categories.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
        ]);

        Categorie::create($validatedData);
        return redirect()->route('all.categories.index')->with('success', 'Category created successfully.');
    }

    public function show(Categorie $category)
    {
        return view('all.categories.show', compact('category'));
    }

    public function edit(Categorie $category)
    {
        return view('all.categories.edit', compact('category'));
    }

    public function update(Request $request, Categorie $category)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
        ]);

        $category->update($validatedData);
        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy(Categorie $category)
    {
        $category->delete();
        return redirect()->route('  categories.index')->with('success', 'Category deleted successfully.');
    }
}
