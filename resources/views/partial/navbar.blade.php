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
        <li class="nav-item">
          <a href="/login" class="nav-link {{( $active === "login") ? 'active' : '' }}"><i class="bi bi-send"></i> Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
