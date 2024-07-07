@extends('dashboard.layout.main')
@section('container')

    
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">create new posts | {{auth()->user()->name}}</h1>
</div>
<div class="col-lg-8">
    <form action="/dashboard/posts" method="POST" class="mb-5">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control @error ('title') is-invalid @enderror " id="title" name="title" required autofocus value="{{ old('title') }}" >
          @error('title')
              <div class="invalid-feedback d-block" role="alert">
                <span>{{ $message }}</span>
              </div>
              @enderror
        </div>
        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control  " id="slug" name="slug" disable readonly >         
        </div>
        <div class="mb-3">
          <label for="category" class="form-label">Category</label>
          <select class="form-select" name="category_id">
            @foreach ( $categories as $category )   
            @if(old('category_id') == $category->id)           
            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
            @else
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endif
            @endforeach
            </select>
        </div>
        <div class="mb-3">
          <label for="body" class="form-label">Body</label>
          <input id="body"  type="hidden" name="body" class="form-control @error ('title') is-invalid @enderror " value="{{ old('body') }}" required >
          <trix-editor input="body"></trix-editor>
          @error('title')
              <div class="invalid-feedback d-block" role="alert">
                <span>{{ $message }}</span>
              </div>
              @enderror
        </div>
        <button type="submit" class="btn btn-primary">Buat Post</button>
      </form>
    </div>
    <script>
       
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        const titleValue = title.value;
        const slugValue = titleValue.replace(/\s+/g, '_'); // Replace spaces with underscores
        slug.value = slugValue;
    });
    document.addEventListener('trix-file-accept' ,function(e){
      e.preventDefault();
    });
  </script>
@endsection