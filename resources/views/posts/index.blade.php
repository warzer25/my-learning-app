@extends('layouts.app')

@section('content')
    <h1>All Posts</h1>
    @foreach($posts as $post)
        <div class="post">
            <h2>{{ $post->title }}</h2>
            <p>{{ Str::limit($post->content, 150) }}</p>
            <a href="/posts/{{ $post->id }}">Read more →</a>
        </div>
    @endforeach
@endsection