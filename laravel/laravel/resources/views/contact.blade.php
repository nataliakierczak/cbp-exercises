@extends('layouts/basic')

@section('title', 'Contact form')

@section('content')

Contact form in HTML wrapper

<form action="" method="post">

    <input type="text" name="who" value="{{($who)}}">
    <input type="submit" value="Send message">
</form>

<ul>
    @foreach($recipients as $recipient)
    <li>
{{$recipient}}
    </li>
       @endforeach
</ul>

@endsection