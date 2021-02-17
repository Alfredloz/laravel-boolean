@extends('welcome')

@section('welcome-content')
    <h2>Zona blog</h2>
    <div class="blog_box">
        @foreach ($posts as $post)
            <h4>{{ $post['title'] }}</h4>
            <p>{{ $post['body'] }}</p>

        @endforeach
    </div>
@endsection