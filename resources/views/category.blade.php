
@extends('layout.main')
@section('container')
<h1 class:"mb-5"> Post category : {{ $category }}</h1>
@foreach( $posts as $post )
<article class ="mb-5">
<h2>
<a href="\post\{{ $post["slug"] }}">{{ $post [ "title" ]}}</h2></a>
<h5>By : {{ $post[ "" ]}}</h5>


<p>{{ $post["excerpt"] }}</p>
</article>
@endforeach
@endsection
