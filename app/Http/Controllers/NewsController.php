<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderByDesc('id')->paginate(3);
            return view('news.index', compact('news'));
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(CreateNewsRequest $request)
    {
        News::create($request->validated());
            return redirect()->route('news');
    }

    public function show(News $oneNews)
    {
        return view('news.show', compact('oneNews'));
    }

    public function edit(News $oneNews)
    {
        return view('news.edit', compact('oneNews'));
    }

    public function update(UpdateNewsRequest $request, News $oneNews)
    {
        $oneNews->update($request->validated());
            return redirect()->route('news');
    }

    public function destroy(News $oneNews)
    {
        $oneNews->delete();
            return redirect()->route('news');
    }
}
