@extends('layouts.app');
@section('content')
    <div class="standardMargin">
        <h1>Create Posts</h1>
        <form action="{{route('posts.store')}}" id="createPost" method="post" enctype="multipart/form-data">
            Title:<br>
            <input type="text" name="title"><br>
            Description:<br>
            <textarea rows="10" cols="100" name="body" form="createPost"></textarea><br><br>
            <!--<input type="file"><br><br>-->
            <input type="submit" value="Submit" class="btn btn-primary">
            {{csrf_field()}}
        </form>
    </div>
@endsection