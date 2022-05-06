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

                        <p class="card-text"><small class="text-muted">Дата создания: {{ $oneNews->created_at }}</small>
                        </p>
                        <div class="float-end">
                            <a href="{{ route('news_show', $oneNews->id) }}" type="submit" class=" btn btn-secondary">
                                <img src="{{ asset('images/eye.svg') }}">
                            </a>
                            <a href="{{ route('news_edit', $oneNews->id) }}" type="submit" class=" btn btn-secondary">
                                <img src="{{ asset('images/edit.svg') }}">
                            </a>
                            <br>
                            <br>
                            <form method="post" action="{{ route('news_destroy', $oneNews->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <img src="{{ asset('images/trash.svg') }}">
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <br>
            @endforeach
            {{$news->links()}}
        @else
            <h3 class="text-primary position-absolute top-50 start-50 translate-middle">Пока нет записей</h3>
        @endif
    </div>
@endsection
