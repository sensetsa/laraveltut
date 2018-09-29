@extends('layouts.app');
@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <div class="standardMargin">
        <h1 style="font-size: 20px">{{$post->title}}</h1>
        <small>Written on {{$post->created_at}}</small>
        <div>
            {{$post->body}}
        </div>
        <hr>
        @if(!Auth::guest())
            @if(Auth::user()->id == $post->user_id)
                <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
                <form action="{{route('posts.destroy', ['post' => $post->id])}}" id="deletePost" method="post">
                    <input type="submit" value="Delete" class="btn btn-danger">
                    {{ method_field('delete') }}
                    {{csrf_field()}}
                </form>
            @endif
        @endif
    </div>
@endsection