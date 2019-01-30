@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ $post->title }}</div>

                <div class="card-body">
                    <div>{!! nl2br($post->body) !!}</div>
                    <br>

                    <h4>Post's Author</h4>
                    <pre>@php(print_r($post->user->toArray()))</pre>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
