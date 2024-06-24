@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $post->title }}</h1>
    <p class="text-muted">By {{ $post->user->name }} on {{ $post->created_at->format('d M Y') }}</p>
    <p>{{ $post->excerpt }}</p>
    <div>{{ $post->content }}</div>

    <hr>

    <h4>Comments</h4>
    @foreach($post->comments as $comment)
        <div class="card mb-3">
            <div class="card-body">
                <p>{{ $comment->content }}</p>
                <p class="text-muted">By {{ $comment->user->name }} on {{ $comment->created_at->format('d M Y') }}</p>
            </div>
        </div>
    @endforeach

    <form action="{{ route('comments.store', $post) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="content">Add a comment</label>
            <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection