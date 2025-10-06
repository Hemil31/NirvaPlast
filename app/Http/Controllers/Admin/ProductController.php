<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all Product posts
        $Products = Product::all();
        return view('admin.Product.index', compact('Products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Product.create');
    }

    /**
     * @param \App\Http\Requests\ProductRequest|\Illuminate\Http\Request $request
     */
    public function store(ProductRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('file_path')) {
            $file = $request->file('file_path');
            $filename = $request->product_name . '_' . time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('uploads/Products', $filename, 'public');
            $validated['file_path'] = $path;
        }

        // Create the Product post
        Product::create($validated);
        return redirect()->route('admin-product-page')->with('success', 'Product post created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Find the Product post by ID
        $Product = Product::findOrFail($id);
        return view('admin.Product.edit', compact('Product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'product_name' => 'required|string|max:255',
            'file_path' => 'nullable|max:2048',
            'status' => 'required|integer|in:0,1',
        ]);

        // Find the Product post by ID
        // dd($request->all());
        $Product = Product::findOrFail($id);

        if ($request->hasFile('file_path')) {
            // Delete old file if exists
            if ($Product->file_path) {
                Storage::disk('public')->delete($Product->file_path);
            }
            $file = $request->file('file_path');
            $filename = $request->product_name . '_' . time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('uploads/Products', $filename, 'public');
            $validated['file_path'] = $path;
        }

        // Update the Product post
        $Product->update($validated);
        return redirect()->route('admin-product-page')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the Product post by ID
        $Product = Product::findOrFail($id);

        // Delete the Product post
        $Product->delete();

        return redirect()->route('admin-product-page')->with('success', 'Product post deleted successfully.');
    }
}
