<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $productquery = Product::query();
        if ($search) {
            $productquery->where('title', 'LIKE', '%' . $search . '%');
        }
        $product = $productquery->paginate(2);

        return view('products.index', compact('product', 'search'));
    }


    public function create()
    {

        $categories = Category::all();
        return view('products.create', compact('categories'));
    }


    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $imagePath = public_path('storage/' . $product->image);

        // Debug the file path
//        dd([
//            'imagePath' => $imagePath,
//            'fileExists' => File::exists($imagePath),
//        ]);

        // Check if the image exists
        if (File::exists($imagePath)) {
            // Delete the image
            File::delete($imagePath);
        }

        // Delete the product
        $product->delete();

        toastr()->success('Product has been deleted successfully');
        return redirect()->route('product.index');
    }


    public function edit(Request $request, $id)
    {
        $product = Product::with('category')->findOrFail($id);
        return view('products.edit', compact('product'));

    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'title' => 'required',
            'description' => 'required|min:10',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required|numeric',
            'quantity' => 'required|integer'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Find the existing product
        $product = Product::findOrFail($id);

        // Handle file upload
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($product->image) {
                storage::delete('public/images/' . $product->image);
            }

            // Store the new image
            $imagePath = $request->file('image')->store('images', 'public');
            $product->image = $imagePath;
        }

        // Update product properties
        $product->category_id = $request->category_id;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;

        // Save the updated product
        $product->save();

        // Display success message
        toastr()->success('Your product has been updated successfully.');

        // Redirect to the product index page
        return redirect()->route('product.index');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'title' => 'required',
            'description' => 'required|min:10',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'quantity' => 'required|integer'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)->withInput();
        }
//        dd($request->all());
        $imagePath = null;
        if ($request->hasFile('image')) {

            $imagePath = $request->file('image')->store('images', 'public'); // Store the image in the 'public/storage/images' directory
        }
        $product = new Product();
        $product->category_id = $request->category_id;
        $product->image = $imagePath;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->save();
        toastr()->success('Your product has been created successfully.');

        return redirect()->route('product.index');
    }
}

