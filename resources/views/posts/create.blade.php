@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Post</h1>
        <div>
            <form action="{{ route('posts.store') }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="mb-3">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Body</label>
                    <textarea class="form-control" name="body"></textarea>
                </div>
                <div class="mb-3">
                    <label>Image:</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="d-grid">
                    <button class="btn btn-success">Submit</button>
                    <a href="{{ route('posts.index') }}" class="btn btn-outline-danger btn-sm">Go Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
