<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateNewsRequest;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderByDesc('id')->paginate(3);
        return view('news', compact('news'));
    }
    public function create()
    {
        return view('create_news');
    }
    public function store(CreateNewsRequest $request)
    {
        News::create($request->validated());
            return redirect('news');
    }
    public function show(News $oneNews)
    {
        return view('news_show', compact('oneNews'));
    }
    public function edit(News $oneNews)
    {
        return view('news_edit', compact('oneNews'));
    }
    public function update(CreateNewsRequest $request, News $oneNews)
    {
        $oneNews->update($request->validated());
            return redirect('news');
    }
    public function destroy(News $oneNews)
    {
        $oneNews->delete();
            return redirect('news');
    }
}
