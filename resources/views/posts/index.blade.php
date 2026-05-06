@extends('layouts.app')

@section('content')
    <h1>All Posts</h1>

    <a href="{{ route('posts.create') }}" style="display: inline-block; margin-bottom: 20px; padding: 8px 16px; background: #3490dc; color: white; text-decoration: none; border-radius: 4px;">+ Create New Post</a>

    @foreach($posts as $post)
        <div class="post">
            <h2>{{ $post->title }}</h2>
            <p>{{ Str::limit($post->content, 150) }}</p>
            <a href="/posts/{{ $post->id }}">Read more →</a>
        </div>
    @endforeach
@endsection