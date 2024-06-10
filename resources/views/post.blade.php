
@extends('layout/main')
@section('container')
<article class ="mb-5">
<h2>{{ $post["title"] }}</h2>
<p> by : ridwan agus on <a href="/categories/{{$post->category->slug}}" >{{ $post->category->name}}</a> </p>
<h5>{{ $post["author"] }}</h5>
<p>{!! $post ->body !!}</p>
</article>

<a href="/blog">back to article</a>
@endsection
