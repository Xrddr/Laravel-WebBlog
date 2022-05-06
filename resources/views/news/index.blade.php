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

                        <p class="card-text"><small class="text-muted">Дата создания: {{ $oneNews->created_at->format('H:i:s / d-m-Y') }}</small>
                        </p>
                        <div class="float-end d-inline-block">
                            <a href="{{ route('news.show', $oneNews) }}" type="submit" class=" btn btn-outline-secondary">
                                <img src="{{ asset('images/eye.svg') }}">
                            </a>
                            <a href="{{ route('news.edit', $oneNews) }}" type="submit" class="btn btn-outline-secondary">
                                <img src="{{ asset('images/edit.svg') }}">
                            </a>
                            <br>
                            <br>
                            <form method="post" action="{{ route('news.destroy', $oneNews) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">
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
