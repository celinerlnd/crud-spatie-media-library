@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Posts List</h1>
        <div class="d-flex p-2 bd-highlight mb-3">
            <a href="{{ route('posts.create') }}" class="btn btn-dark">Add</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th width="30%">Image</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $key => $post)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->body }}</td>
                        <td><img src="{{ $post->getFirstMediaUrl('images', 'thumb') }}" / width="120px"></td>
                        <td>
                            <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                <a href="{{ route('posts.show', $post) }}" class="btn btn-primary"> Show
                                </a>
                                <a href="{{ route('posts.edit', $post) }}" class="btn btn-success"> Edit
                                </a>
                                @csrf
                                @method ('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                                    Delete </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
