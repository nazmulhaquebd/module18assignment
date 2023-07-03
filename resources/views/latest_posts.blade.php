@extends('layouts.app')

@section('content')
    <h1>Latest Posts for Each Category</h1>

    @foreach ($categories as $category)
        <h2>{{ $category->name }}</h2>

        @php
            $latestPost = $category->getLatestPost();
        @endphp

        @if ($latestPost)
            <div>
                <h3>{{ $latestPost->title }}</h3>
                <p>{{ $latestPost->content }}</p>
            </div>
        @else
            <p>No posts found for this category.</p>
        @endif
    @endforeach
@endsection
