@extends('layouts.app')

@section('content')
    <h1>All Posts</h1>

    @foreach ($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
            <p>Category: {{ $post->category->name }}</p>
        </div>
    @endforeach
@endsection
