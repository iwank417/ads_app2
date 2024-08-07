@extends('layout.main')
@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">

      {{-- alert --}}
      @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      @if (session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
      <main class="form-signin w-100 m-auto">
          <form action="/login" method="POST">
            @csrf
            <h3 class="h3 mb-3 fw-normal"><i class="bi bi-emoji-grimace-fill"></i>Login</h3>
        
            <div class="form-floating ">
              <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
              <label for="email">Email address</label>
              @error('email')
              <div class="invalid-feedback d-block" role="alert">
                <span>{{ $message }}</span>
              </div>
        
                
              @enderror
            </div>
            <div class="form-floating mt-3">
              <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
              <label for="password">Password</label>
            </div>
        
            {{-- <div class="form-check text-start my-3">
              <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                Remember me
              </label>
            </div> --}}
            <button class="btn btn-primary w-100 py-2 mt-3" type="submit"><i class="bi bi-controller"></i>  Masuk</button>
            {{-- <p class="mt-5 mb-3 text-body-secondary">Ridwan Agus - 2024 &copy; </p> --}}
          </form>
          <small class="d-block text-center mt-3"><i class="bi bi-exclamation-lg"></i>Belum registrasi ?.....<a href="/register" class="text-decoration-none"><i class="bi bi-send-plus"></i> Register Now..</a></small>
        </main>


    </div>
</div>

    
  

@endsection