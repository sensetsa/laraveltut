@extends('layouts.app');
@section('content')
    <div class="standardMargin">
        <h1>Edit Posts</h1>
        <form action="{{route('posts.update', ['post' => $post->id])}}" id="updatePost" method="post">
            Title:<br>
            <input type="text" name="title" value="{{$post->title}}"><br>
            Description:<br>
            <textarea rows="10" cols="100" name="body" form="updatePost">{{$post->body}}</textarea><br><br>
            <input type="submit" value="Submit" class="btn btn-primary">
            {{ method_field('put') }}
            {{csrf_field()}}
        </form>
    </div>
@endsection