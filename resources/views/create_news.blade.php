@extends('layouts.main')
@section('title')
    Создать новость
@endsection
@section('main_content')
    <form method="post" action="/create_news/check"
          class="text-center container border border-1 container p-5 position-absolute mx-auto w-50 top-50 start-50 translate-middle">
        <h1 class="h3 mb-3 fw-normal">Create news</h1>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @csrf
        <div class="form-floating">
            <input name="name" type="login" class="form-control" id="floatingInput" placeholder="Name">
            <label for="floatingInput">Name</label>
        </div>
        <br>
        <div class="form-floating">
            <textarea name="description" class="form-control" placeholder="Description" id="floatingTextarea2"
                      style="height: 200px"></textarea>
            <label for="floatingTextarea2">Description</label>
        </div>
        <br>
        <button type="submit" class="w-50 btn btn-lg btn-primary">Create news</button>
    </form>
@endsection
