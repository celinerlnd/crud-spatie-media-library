@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Update Post</h1>
        <div>
            <form action="{{ route('posts.update', $post) }}" enctype="multipart/form-data" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                </div>
                <div class="mb-3">
                    <label>Body</label>
                    <input type="text" class="form-control" name="body" value="{{ $post->body }}">
                </div>
                <div class="mb-3">
                    <label>Image:</label>
                    <input type="file" name="image" class="form-control">
                    <img src="{{ $post->getFirstMediaUrl('images', 'thumb') }}" / width="120px">
                </div>
                <div class="d-grid">
                    <button class="btn btn-success">Submit</button>
                    <a href="{{ route('posts.index') }}" class="btn btn-outline-danger btn-sm">Go Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
