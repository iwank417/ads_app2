
@extends('layout.main')
@section('container')

@foreach( $posts as $post )
<article class ="mb-5">
<h2>
<a href="\post\{{ $post["slug"] }}">{{ $post [ "title" ]}}</h2></a>
<h5>By : {{ $post[ "author" ]}}</h5>


<p>{{ $post["excerpt"] }}</p>
</article>
@endforeach
@endsection
