
@extends('layout/main')
@section('container')
<h1>This about page</h1>
<p>{{  $name }}</p>
<p>{{ $email}}</p>
<img src="img/{{ $image}}" alt=" iwank" width=" 200" class ="img-tumbnail rounded-circle">

@endsection
