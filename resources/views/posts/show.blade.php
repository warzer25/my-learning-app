@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>

    
    <a href="{{ route('posts.edit',$post) }}">Edit posts</a>

    <a href="/posts">← Back to all posts</a>
    
@endsection
