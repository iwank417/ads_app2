
@extends('layout.main')
@section('container')

@foreach( $posts as $post )
<article class ="mb-5 border-bottom pb-4">
<h2>
<a href="\post\{{ $post["slug"] }}" class="text-decoration-none">{{ $post [ "title" ]}}</h2></a>
<p> by : <a href="/authors/{{ $post->user->id }}" class="text-decoration-none">{{ $post->user->name }}</a> <a href="/categories/{{$post->category->slug}}" class="text-decoration-none">{{ $post->category->name}}</a> </p>
<h5>{{ $post["author"] }}</h5>


<p>{{ $post["excerpt"] }}</p>
<a href="\post\{{ $post["slug"] }}" class="text-decoration-none">Read more..</a>
</article>
@endforeach
@endsection
