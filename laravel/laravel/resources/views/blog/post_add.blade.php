@extends('layouts/basic')

@section ('title', 'Add a new post')

@section('content')

    <form action="" method="post">
        {{ csrf_field() }}
      Blog post title<input type="text" name="title">
        <br>
        <hr>
      Blog post text <textarea name="text"></textarea>
        <br>
        <hr>
        <input type="submit" value="Save">
    </form>

@endsection