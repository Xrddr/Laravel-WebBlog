<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'home'])->name('home');

Route::get('/news', [NewsController::class, 'index'])->name('news');

Route::get('/about', [MainController::class, 'about'])->name('about');

Route::get('/create_news', [NewsController::class, 'create'])->name('create_news');

Route::post('/create_news/check', [NewsController::class, 'store']);

Route::get('/news_show/{oneNews}', [NewsController::class, 'show'])->name('news_show');

Route::delete('/news/{oneNews}', [NewsController ::class, 'destroy'])->name('news_destroy');

Route::get('/news/edit/{oneNews}', [NewsController ::class, 'edit'])->name('news_edit');

Route::put('/news/edit/update{oneNews}}', [NewsController ::class, 'update'])->name('news_update');

Route::get('/signin', function () {
    return view('sign_in');
});

Route::get('/signup', function () {
    return view('sign_up');
});
