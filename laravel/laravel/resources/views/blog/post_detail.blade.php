@extends ('layouts/basic')

@section ('title', 'Detail of post')

@section ('content')

    <h1>{{$post->title}}</h1>
<p>{{$post->text}}</p>

@endsection