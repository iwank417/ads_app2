@extends('dashboard.layout.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5" >
        <div class="col-lg-8">
        <article class ="mb-5 my-3 ">
            <h2 class="mb-3">{{ $posts["title"] }}</h2>
            <a href="/dashboard/posts" class="btn btn-success mb-3">Back to my post</a>
            <a href="/dashboard/posts/{{ $posts->slug }}/edit" class="btn btn-warning mb-3">Edit</a>
            <form action="/dashboard/posts/{{ $posts->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger mb-3" onclick="return confirm('hapus posting ? ')"><svg class="bi"><use xlink:href="#puzzle"/></svg> Hapus</button>
              </form>
                <img src="https://images.unsplash.com/photo-1461988320302-91bde64fc8e4?ixid=2yJhcHBfaWQiOjEyMDd9" class="card-img-top" alt="{{ $posts->category->name}}" width="200px" height="150" class="imag-fluid">
            <p>{!! $posts ->body !!}</p>
            </article>
            
           

        </div>
    </div>


@endsection