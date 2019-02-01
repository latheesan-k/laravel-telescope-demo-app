@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Posts</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Author</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($allPosts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ str_limit($post->title, 30) }}</td>
                                    <td>{{ $post->user->name }}</td>
                                    <td>{{ $post->created_at->diffForHumans() }}</td>
                                    <td><a class="btn btn-sm btn-primary" href="/posts/{{ $post->id }}">View</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
