
@extends('layout.main')
@section('container')
<h3 class="mb-4">{{ $title }}</h3>
<div class="row mb-3">
  <div class="col-md-6">
    <form action="/blog">
      @if (request('category'))
    <input type="hidden" name="category" value="{{ request('category') }}">
    @endif
    @if(request('author'))
        <input type="hidden" name="author" value="{{ request('author') }}">
      @endif
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="....Cari...." name="cari" value="{{ request('cari') }}">
        <button class="btn btn-primary" type="submit"  >Cari</button>
      </div>

    </form>
  </div>
</div>


@if ($posts->count())
<div class="card mb-3 text-center">
    <a href="\post\{{ $posts[0]["slug"] }}" class="text-decoration-none text-dark"><img src="https://images.unsplash.com/photo-1461988320302-91bde64fc8e4?ixid=2yJhcHBfaWQiOjEyMDd9" class="card-img-top" alt="" width="200px" height="150">
    <div class="card-body">
      <h3 class="card-title ">{{ $posts[0]->title }}</h3></a>
      <p class="card-text"><small class="text-body-secondary">
     <p> by : <a href="/blog?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> on
    <a href="/blog?category={{$posts[0]->category->slug}}" class="text-decoration-none">{{ $posts[0]->category->name}}
    </a> {{ $posts[0]->created_at->DiffForHumans() }}</p>
    <h5>{{ $posts[0]["authors"] }}</h5>
</small></p>
      <p class="card-text">{{ $posts[0]->excerpt }}</p>
      <a href="\post\{{ $posts[0]["slug"] }}" class="text-decoration-none btn btn-primary">Read more..</a>
    </div>
  </div>


  <div class="container">
    <div class="row">
      @foreach ($posts->skip(1) as $post )   
      
    <div class="col-md-4 mb-3">

      <div class="card" style="width: 18rem;">

        <div class="position-absolute px-3 py-2 " style="background-color: rgba(161, 156, 156, 0.7)"><a href="/categories/{{$post->category->slug}}" class="text-white text-decoration-none"> {{ $post->category->name }}</a></div>
        <img src="https://images.unsplash.com/photo-1417325384643-aac51acc9e5d" class="card-img-top" width="300px" height="300px" alt="{{ $post->category->name}}">
        <div class="card-body">
          <h5 class="card-title">{{ $post [ "title" ]}}</h5>
          <p> by : <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> on
            <a href="/blog?category={{$post->category->slug}}" class="text-decoration-none">{{ $post->category->name}}
            </a> {{ $post->created_at->DiffForHumans() }}</p>
            <h5>{{ $post["authors"] }}</h5>
        </small></p>

          <p class="card-text">{{ $post["excerpt"] }}</p>
          <a href="\post\{{ $post["slug"] }}" class="btn btn-primary">Read More..</a>
        </div>
      </div>


    </div>
    @endforeach
    </div>
    </div>
    @else
    <p class ="text-center fs-4"> page not found </p>
    @endif
<div class="d-flex justify-content-center">
    {{ $posts->links()}}
</div>
@endsection
