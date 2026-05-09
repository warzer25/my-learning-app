@extends('layouts.app')

@section('content')
    <div class="post">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>
    </div>

    @auth
    <a href="{{ route('posts.edit', $post) }}">Edit Post</a>
    
    <form method="POST" action="{{ route('posts.destroy', $post) }}" style="display: inline;" onsubmit="return confirm('Are you sure?')">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Post</button>
    </form>
    @endauth
    
    
@endsection
