@extends('layouts.app')
@section('content')
<body class="parallax-body">
    <h1 class="standardMargin">Welcome to CritShare</h1>
    <p class="standardMargin">Get feedback from your peers and view the best of creators!</p>
<div class="parallax-group">
    <img class="back parallax-img" src="{{URL::asset('/images/bluesky.jpg')}}">
    <header>
        <img class="front parallax-img" src="{{URL::asset('images/grassfield.jpg')}}">
        <h1>Parallax</h1>
    </header>
</div>

</body>
@endsection