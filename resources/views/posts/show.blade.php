@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Post</h1>
        <div>
            <form action="{{ route('posts.store') }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="mb-3">
                    <label>Title</label>
                    <input readonly type="text" class="form-control" name="title" value="{{ $post->title }}">
                </div>
                <div class="mb-3">
                    <label>Body</label>
                    <input readonly type="text" class="form-control" name="body" value="{{ $post->body }}">
                </div>
                <div class="mb-3">
                    <label>Image:</label>
                    <img src="{{ $post->getFirstMediaUrl('images', 'thumb') }}" / width="120px">
                </div>
                <div class="d-grid">
                    <a href="{{ route('posts.index') }}" class="btn btn-outline-danger btn-sm">Go Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
