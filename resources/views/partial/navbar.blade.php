<nav class="navbar navbar-expand-lg " style="background-color: #e3f2fd;">
  <div class="container">
    <a class="navbar-brand" href="/">iwank blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{( $active === "home") ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{( $active === "about") ? 'active' : '' }} " href="/about">about</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{( $active === "blog") ? 'active' : '' }} " href="/blog">blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{( $active === "categori") ? 'active' : '' }} " href="/categories">Categories</a>
        </li>       
      </ul>
      <ul class="navbar-nav ms-auto">
      @auth
      
        
          <li class="nav-item dropdown">
            <button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-fan"></i> Welcome , {{ auth()->user()->name }}
            </button>
            <ul class="dropdown-menu ">
              <li><a class="dropdown-item" href="/dashboard"> <i class="bi bi-grid-3x3-gap-fill"></i> My Dashbord</a></li>
              <li><form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-sign-turn-slight-right"></i> Logout</button>
              </form></li>
              {{-- <a class="dropdown-item" href="#"> <i class="bi bi-sign-turn-slight-right"></i> Logout</a></li> --}}
              
              
            </ul>
          </li>
       

        @else

       
          <li class="nav-item">
            <a href="/login" class="nav-link {{( $active === "login") ? 'active' : '' }}"><i class="bi bi-send"></i> Login</a>
          </li>
       

      @endauth
    </ul>
    </div>
  </div>
</nav>
