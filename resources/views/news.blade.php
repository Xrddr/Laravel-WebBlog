@extends('layouts.main')
@section('title')
    Новости
@endsection
@section('main_content')
    <div class="container text-center">
        @if($news)
            @foreach($news as $oneNews)
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$oneNews->name}}</h5>
                            <p class="card-text">{{ $oneNews->description }}</p>
                            <p class="card-text"><small class="text-muted">Дата создания: {{ $oneNews->created_at }}</small></p>
                        </div>
                    </div>
                <br>
            @endforeach
        @else
            <h3 class="text-primary position-absolute top-50 start-50 translate-middle">Пока нет записей</h3>
        @endif
    </div>
@endsection
