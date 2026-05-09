{{-- resources/views/welcome.blade.php --}}
@extends('layouts.app')

@section('content')
    <div style="text-align: center; padding: 40px 20px 60px;">
        <h1 style="font-size: 3rem; margin-bottom: 1rem; background: linear-gradient(115deg, #e2e8f0, #94a3b8); background-clip: text; -webkit-background-clip: text; color: transparent;">
            Welcome to My Blog
        </h1>
        <p style="font-size: 1.2rem; color: #cbd5e1; margin-bottom: 2rem; max-width: 600px; margin-left: auto; margin-right: auto;">
            Read the latest thoughts, stories, and ideas. Stay inspired.
        </p>
        <a href="{{ route('posts.index') }}" style="display: inline-block; background: #3b82f6; color: white; font-weight: 600; padding: 12px 32px; border-radius: 40px; text-decoration: none; font-size: 1rem; transition: 0.2s; box-shadow: 0 2px 6px rgba(0,0,0,0.2);">
            View Posts
        </a>
    </div>
@endsection