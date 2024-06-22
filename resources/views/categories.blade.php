
@extends('layout.main')
@section('container')
<h1 class:"mb-5"> Post categories </h1>
<div class="container">
    <div class="row">
        @foreach ($categories as $category )      
        <div class="col-md-4">
            <a href="/blog?category={{ $category->slug }}">
            <div class="card text-bg-dark">
                <img src="https://images.unsplash.com/photo-1461988320302-91bde64fc8e4?ixid=2yJhcHBfaWQiOjEyMDd9" class="card-img" alt="{{ $category->name}}">
                <div class="card-img-overlay d-flex align-items-center p-0">
                  <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(161, 156, 156, 0.7)">{{ $category->name}}</h5>
                 </div>
              </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection
