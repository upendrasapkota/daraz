<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('categories.index', compact('categories'));
    }

    public function show($id)
    {
        $category = Category::with('product')->findOrFail($id);
        return view('categories.show', compact('category'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image file
        ]);

        if (($request->hasfile('image'))) {
            $imagePath = $request->file('image')->store('images', 'public'); // Store the image in the 'public/images' directory

        }
        $category = new Category();
        $category->category_name = $request->name;
        $category->image = $imagePath;
        $category->save();
        toastr()->success('category has been saved successfully!');
        return redirect()->route('categories.index');
    }
}

