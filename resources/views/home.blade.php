@extends('layouts.main')
@section('title')
    Главная страница
@endsection
@section('main_content')
    <div class="p-5 mb-4 bg-light rounded-1 position-absolute top-50 start-50 translate-middle">
        <div class="container-fluid h-100 p-5 bg-light border text-center">
            <h1 class="display-6 fw-bold">Welcome!</h1>
            <p class=" fs-5">Posts and news about laravel php will be published here. It will also be my personal life and do some extra features for users of the site.</p>
            <a href="{{route('news')}}" class="btn btn-primary btn-lg center-block" type="button">Go to news!</a>
        </div>
    </div>
@endsection
