<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\NewsRequest;
use App\Models\News;

class NewsController extends Controller
{
    public function index() {
        $news = News::orderBy('created_at', 'desc')->paginate(5);

        return view('admin.news.index', compact('news'));
    }

    public function show(News $news) {
        return view('admin.news.show', compact('news'));
    }

    public function edit(News $news) {
        $categories = Category::getAllCategories();

        return view('admin.news.edit', compact('news', 'categories'));
    }

    public function destroy(News $news) {
        $news->delete();

        return redirect('/');
    }

    public function create() {
        $categories = Category::getAllCategories();

        return view('admin.news.create', compact(['categories']));
    }

    public function store(NewsRequest $request) {
        News::create($request->all());

        return redirect('/');
    }

    public function update(NewsRequest $request, News $news) {
        $news->update($request->all());

        return redirect('/');
    }
}
