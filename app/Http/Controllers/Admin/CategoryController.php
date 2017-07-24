<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Http\Requests\NewsRequest;
use App\Models\News;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();

        return view('admin.category.index', compact('categories'));
    }

    public function create() {
        return view('admin.category.create');
    }

    public function destroy(Category $category) {
        $category->delete();

        return redirect()->route('admin.category.index');
    }

    public function store(CategoryRequest $request) {
        Category::create($request->all());

        return redirect()->route('admin.category.index');
    }

    public function update(CategoryRequest $request, Category $category) {
        $category->update($request->all());

        return redirect()->route('admin.category.index');
    }

    public function edit(Category $category) {
        return view('admin.category.edit', compact('category'));
    }
}
