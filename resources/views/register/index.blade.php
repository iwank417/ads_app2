@extends('layout.main')
@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
        <main class="form-Registration w-100 m-auto">
            <form action="/register" method="POST">
                @csrf
            <h3 class="h3 mb-3 fw-normal"><i class="bi bi-emoji-grimace-fill"></i>Registrasi Form</h3>
            <div class="form-floating ">
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="nama anda" required value="{{ old('name')}}">
              <label for="name">Nama</label>
              @error('name')
              <div class="invalid-feedback d-block" role="alert">
                <span>{{ $message }}</span>
              </div>
              @enderror
            </div>
            <div class="form-floating mt-3">
              <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="User Name" required value="{{ old('username')}}">
              <label for="User name">User Name</label>
              @error('username')
              <div class="invalid-feedback d-block" role="alert">
                <span>{{ $message }}</span>
              </div>
              @enderror
            
            </div>
                  
            <div class="form-floating mt-3 ">
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email address" required value="{{ old('email')}}">
              <label for="email">Email address</label>
              @error('email')
              <div class="invalid-feedback d-block" role="alert">
                <span>{{ $message }}</span>
              </div>
              @enderror
            
            </div>
            <div class="form-floating mt-3">
              <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
              <label for="password">Password</label>
              @error('password')
              <div class="invalid-feedback d-block" role="alert">
                <span>{{ $message }}</span>
              </div>
              @enderror
           
            </div>
        
        
          
            <button class="btn btn-primary w-100 py-2 mt-3" type="submit"><i class="bi bi-controller"></i> Register</button>
            {{-- <p class="mt-5 mb-3 text-body-secondary">Ridwan Agus - 2024 &copy; </p> --}}
          </form>
          <small class="d-block text-center mt-3"><i class="bi bi-exclamation-lg"></i>Sudah registrasi ?.....<a href="/login" class="text-decoration-none"><i class="bi bi-send-plus"></i> Login Disini</a></small>
        </main>


    </div>
</div>

    
  

@endsection