{{-- resources/views/posts/edit.blade.php --}}
@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>

    @if ($errors->any())
        <div style="background: #f8d7da; color: #721c24; padding: 10px; border-radius: 4px; margin-bottom: 20px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')

        <div style="margin-bottom: 15px;">
            <label for="title" style="display: block; margin-bottom: 5px;">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}" style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px;" required>
        </div>

        <div style="margin-bottom: 15px;">
            <label for="content" style="display: block; margin-bottom: 5px;">Content</label>
            <textarea name="content" id="content" rows="6" style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px;" required>{{ old('content', $post->content) }}</textarea>
        </div>

        <button type="submit" style="padding: 8px 16px; background: #38c172; color: white; border: none; border-radius: 4px;">Update Post</button>
        <a href="{{ route('posts.show', $post) }}">Cancel</a>
    </form>
@endsection