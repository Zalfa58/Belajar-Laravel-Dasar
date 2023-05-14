@extends('layouts.main')

@section('container')

    @foreach ($posts as $post)
        <article class="container mb-5">
            <h2>
                <a href="/posts/{{ $post["slug"] }}">{{ $post["title"] }}</h2></a>
            <h5>{{ $post["author"] }}</h5>
            <p>{{ $post["body"] }}</p>
        </article>
    @endforeach

@endsection

