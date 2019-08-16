@extends('layouts.app')
@section('content')
    <h1>Post一覧</h1>

    <table class="table">
        <tr>
            <th>Category</th>
            <th># of Posts</th>
        </tr>
        @foreach ($categoryList as $category)
            <tr>
                <td>{{ $category->label }}</td>
                <td>{{ $category->total_posts }}</td>
            </tr>
        @endforeach
    </table>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Category</th>
            <th scope="col">Title</th>
            <th scope="col">Body</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($postList as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->category->label ?? '' }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->body }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center pt-3">{{ $postList->links() }}</div>
@endsection
