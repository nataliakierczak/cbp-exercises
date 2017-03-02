@extends ('layouts/basic')

@section ('title', 'Post list')

@section ('content')

    <h1>List of posts</h1>
    <p>Lorem ipsum dolor sit amet.</p>


    <ul>
        @foreach($posts as $post_id=>$post_name)
            <li>
                <a href="{{route('post_detail', ['id'=>$post_id])}}">
                {{$post_name}}
                </a>
            </li>


    @endforeach
    </ul>

@endsection

