@extends('layouts.app')
@section('content')
    <h1>Are you sure you want to delete this post?</h1>
    <p>{{ $post->title }}</p>
    <p>{{ $post->content }}</p>

    <form action="{{ route('posts.destroy', $post) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Yes, delete</button>
    </form>

    <a href="{{ route('posts.show', $post) }}">No, go back</a>
@endsection