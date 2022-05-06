@extends('layouts.main')
@section('title')
    Просмотр новости
@endsection
@section('main_content')
    <div class="container text-center">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">{{$oneNews->name}}</h2>
                <p class="card-text">{{ $oneNews->description }}</p>

                <p class="card-text"><small class="text-muted">Дата создания: {{ $oneNews->created_at->format('h:i:s / d-m-Y (D)') }}</small></p>
                <p class="card-text"><small class="text-muted">Последняя дата обновления: {{ $oneNews->updated_at->format('h:i:s / d-m-Y (D)') }}</small></p>
            </div>
            <div class="text-center">
            <a href="{{ route('news')}}" type="submit" class="btn btn-light">
                <img src="{{ asset('images/back.svg') }}"> Go back
            </a>
            </div>
        </div>
    </div>
@endsection
