<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\News;
use App\Repositories\CategoryRepository;
use App\Repositories\NewsRepository;

class NewsController extends Controller
{
    private $newsRepository;
    private $categoryRepository;

    /**
     * NewsController constructor.
     * @param NewsRepository $newsRepository
     * @param CategoryRepository $categoryRepository
     */
    public function __construct(NewsRepository $newsRepository, CategoryRepository $categoryRepository)
    {
        $this->newsRepository = $newsRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $news = $this->newsRepository->paginate('desc', 3);

        return view('admin.news.index', compact('news'));
    }

    public function show(News $news)
    {
        return view('admin.news.show', compact('news'));
    }

    public function edit(News $news)
    {
        $categories = $this->categoryRepository->allToList();

        return view('admin.news.edit', compact('news', 'categories'));
    }

    public function destroy(News $news)
    {
        $this->newsRepository->delete($news);

        return redirect()->route('admin.news.index');
    }

    public function create()
    {
        $categories = $this->categoryRepository->allToList();

        return view('admin.news.create', compact(['categories']));
    }

    public function store(NewsRequest $request)
    {
        $this->newsRepository->create($request->all());

        return redirect()->route('admin.news.index');
    }

    public function update(NewsRequest $request, News $news)
    {
        $this->newsRepository->update($news, $request->all());

        return redirect()->route('admin.news.index');
    }
}
