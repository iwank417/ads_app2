@extends('dashboard.layout.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My post | {{auth()->user()->name}}</h1>
</div>
@if( session()->has('success'))
<div class="alert alert-secondary col-lg-8" role="alert">
  {{ session('success') }}
</div>
@endif
    <div class="table-responsive  col-lg-8">
      <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Buat Posts Baru</a>
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Judul</th>
            <th scope="col">Category</th>
            <th scope="col">Action</th>
           </tr>
        </thead>
        <tbody>
          @foreach ($posts as $post )
            
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->category->name }}</td>
            <td>
              <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info text-decoration-none"><svg class="bi"><use xlink:href="#list"/></svg> Detail</a>
              <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning text-decoration-none"><svg class="bi"><use xlink:href="#file-earmark"/></svg> Edit</a>
              <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger text-decoration-none border-0" onclick="return confirm('hapus posting ? ')"><svg class="bi"><use xlink:href="#puzzle"/></svg> Hapus</button>
              </form>
              


            </td>
            
          </tr>

          @endforeach
          
        </tbody>
      </table>    
  </div>


@endsection