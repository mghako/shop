<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    public function index() {
        $products = Product::latest()->filter(
            request(['search'])
        )->with('category')->paginate(5);
        
        return view('admin.products.index',[
            'products' => $products
        ]);
    }
    
    public function create() {
        $categories = Category::all();
        return view('admin.products.create',[
            'categories' => $categories
        ]);
    }

    public function store(Request $request) {
        $attributes = $request->validate([
            'name' => 'required|string|min:3|max:255',
            'slug' => 'required|string|min:3|max:255|unique:products,slug',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

        Product::create($attributes);

        return redirect()->route('admin.products.index')->with('success', 'New Product Added!');
    }

    public function edit(Product $product) {
        return view('admin.products.edit', [
            'product' => $product
        ]);
    }

    public function update(Request $request, Product $product) {
        $attributes = $request->validate([
            'name' => 'required|string',
            'slug' => ['required', Rule::unique('products', 'slug')->ignore($product)],
        ]);
        $product->update($attributes);

        return back()->with('success', 'Product Updated!');
    }

    public function destroy(Product $product) {
        $product->delete();
        return redirect('/admin/products')->with('success', 'Product Deleted!');
    }
}
