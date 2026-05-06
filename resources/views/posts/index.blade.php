@extends('layouts.app')

@section('content')
    <h1>All Posts</h1>

    @foreach($posts as $post)
        <article style="border-bottom: 1px solid #ccc; margin-bottom: 20px;">
            <h2>{{ $post->title }}</h2>
            <p>{{ Str::limit($post->content, 150) }}</p>
            <a href="/posts/{{ $post->id }}">Read more →</a>
        </article>
    @endforeach
@endsection