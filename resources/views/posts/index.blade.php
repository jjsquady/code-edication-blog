@extends('home')

@section('content')
<h1>Blog</h1>

<div class="container">
    <div class="content">
        @foreach($posts as $post)
            <div><h3>{{ $post['title'] }}</h3></div>
            <div>
                <h5>{{ $post['content']  }}</h5>
            </div>
        @endforeach
    </div>
</div>
@endsection