<header class="navbar sticky-top flex-md-nowrap p-0 shadow bg-dark-theme" >
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="#">Ads-Net</a>
    <ul class="navbar-nav flex-row  ">
      <li class="nav-item text-nowrap">        
        <button class="nav-link px-3 " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle search">
          <svg class="bi"><use xlink:href="#search"/></svg>
        </button>
      </li>
      <li class="nav-item text-nowrap">
        <button class="nav-link px-3 text-blue" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <svg class="bi"><use xlink:href="#list"/></svg>
        </button>
      </li>
      <li class="nav-item text-nowrap bg-dark-theme">
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="nav-link px-3 bg-dark-theme"><svg class="bi"><use xlink:href="#door-closed"/></svg> Logout</button>
              </form>
          
        </li>
    </ul>
    <div id="navbarSearch" class="navbar-search w-100 collapse">
      <input class="form-control w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
    </div>
  </header>