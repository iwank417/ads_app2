<nav class="navbar navbar-expand-lg " style="background-color: #e3f2fd;">
  <div class="container">
    <a class="navbar-brand" href="/">iwank blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{( $title === "Home") ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{( $title === "About") ? 'active' : '' }} " href="/about">about</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{( $title === "Blog") ? 'active' : '' }} " href="/blog">blog</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>
