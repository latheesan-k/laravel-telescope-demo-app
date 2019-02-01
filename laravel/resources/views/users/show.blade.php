@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">View User #{{ $user->id }}</div>

                <div class="card-body">
                    <h4>User Info</h4>
                    <pre>@php(print_r($user->toArray()))</pre>

                    <h4>User's Posts</h4>
                    <pre>@php(print_r($user->posts->toArray()))</pre>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
