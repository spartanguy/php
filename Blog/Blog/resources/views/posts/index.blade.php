@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Blog Posts</h1>
    @foreach ($posts as $post)
        <div class="card mb-3">
            <div class="card-body">
                <h2 class="card-title">{{ $post->title }}</h2>
                <p class="card-text">{{ $post->excerpt }}</p>
                <p class="text-muted">By {{ $post->user->name }} on {{ $post->created_at->format('d M Y') }}</p>
                <a href="{{ route('posts.show', $post) }}" class="btn btn-primary">Read More</a>
            </div>
        </div>
    @endforeach

    {{ $posts->links() }}
</div>
@endsection