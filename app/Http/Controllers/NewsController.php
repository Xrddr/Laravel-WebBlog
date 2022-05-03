<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNewsRequest;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('id', 'DESC')->get();
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
    public function show()
    {}
    public function edit()
    {}
    public function update()
    {}
    public function destroy()
    {}
}
