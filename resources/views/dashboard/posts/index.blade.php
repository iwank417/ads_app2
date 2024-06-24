@extends('dashboard.layout.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">my post | {{auth()->user()->name}}</h1>
</div>
    <div class="table-responsive small">
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
              <a href="" class="badge bg-warning text-decoration-none"><svg class="bi"><use xlink:href="#file-earmark"/></svg> Edit</a>
              <a href="" class="badge bg-danger text-decoration-none"><svg class="bi"><use xlink:href="#puzzle"/></svg> Hapus</a>


            </td>
            
          </tr>

          @endforeach
          
        </tbody>
      </table>    
  </div>


@endsection