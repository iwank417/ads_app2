@extends('dashboard.layout.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5" >
        <div class="col-lg-8">
        <article class ="mb-5 my-3 ">
            <h2 class="mb-3">{{ $posts["title"] }}</h2>
            <a href="/dashboard/posts" class="btn btn-success mb-3">Back to my post</a>
            <a href="/dashboard/posts" class="btn btn-warning mb-3">Edit</a>
            <a href="/dashboard/posts" class="btn btn-danger mb-3">Hapus</a>
                <img src="https://images.unsplash.com/photo-1461988320302-91bde64fc8e4?ixid=2yJhcHBfaWQiOjEyMDd9" class="card-img-top" alt="{{ $posts->category->name}}" width="200px" height="150" class="imag-fluid">
            <p>{!! $posts ->body !!}</p>
            </article>
            
            <a href="/blog">back to article</a>

        </div>
    </div>


@endsection