
@extends('layout.main')
@section('container')

<div class="container">
    <div class="row justify-content-center mb-5" >
        <div class="col-md-8">
        <article class ="mb-5 my-3 ">
            <h2>{{ $post["title"] }}</h2>
            <p> by : <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>
                on <a href="/blog?category={{$post->category->name}}" >{{ $post->category->name}}</a> </p>
                <img src="https://images.unsplash.com/photo-1461988320302-91bde64fc8e4?ixid=2yJhcHBfaWQiOjEyMDd9" class="card-img-top" alt="{{ $post->category->name}}" width="200px" height="150" class="imag-fluid">
            <p>{!! $post ->body !!}</p>
            </article>
            
            <a href="/blog">back to article</a>

        </div>
    </div>
</div>
@endsection
