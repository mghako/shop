<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function index() {

        // dd(request(['search']));
        $categories = Category::latest()->filter(
            request(['search'])
        )->withCount('products')->paginate(5);
    
        return view('admin.categories.index',[
            'categories' => $categories
        ]);
    }
    public function create() {
        return view('admin.categories.create');
    }

    public function store(Request $request) {
        $attributes = $request->validate([
            'name' => 'required|string|min:3|max:255',
            'slug' => 'required|string|min:3|max:255|unique:categories,slug'
        ]);

        Category::create($attributes);

        return redirect()->route('admin.categories.index')->with('success', 'New Category Added!');
    }

    public function edit(Category $category) {
        return view('admin.categories.edit', [
            'category' => $category
        ]);
    }

    public function update(Request $request, Category $category) {
        $attributes = $request->validate([
            'name' => 'required|string',
            'slug' => ['required', Rule::unique('categories', 'slug')->ignore($category)],
        ]);
        $category->update($attributes);

        return back()->with('success', 'Category Updated!');
    }

    public function destroy(Category $category) {
        $category->delete();
        return redirect('/admin/categories')->with('success', 'Category Deleted!');
    }
}
