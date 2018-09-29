@extends('layouts.app')
@section('content')
<body>
    <h1 class="standardMargin">{{$title}}</h1>
    <ul class="list-group standardMargin">
    @if(count($services) > 0)
        @foreach($services as $service)
            <li class="list-group-item">{{$service}}</li>
        @endforeach
    @endif
    </ul>
</body>
@endsection