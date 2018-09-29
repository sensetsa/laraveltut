@extends('layouts.app');
@section('content')
<a href="/posts/create" class="btn btn-default">Create Post</a>
    <div class="standardMargin">
        <h1>Posts</h1>
        @if(count($posts) > 0)
            @foreach($posts as $post)
                <div style="width: 40%;">
                    <a href="/posts/{{$post->id}}">
                        <h2>{{$post->title}}</h2>
                        <h3>{{$post->body}}<h3>
                    </a>
                <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                </div>
            @endforeach
        @else
        @endif
    </div>
@endsection