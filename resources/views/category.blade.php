@extends('layouts.app')

@section('content')
    <h1>Posts in Category: {{ $category->name }}</h1>

    @foreach ($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
        </div>
    @endforeach
@endsection
