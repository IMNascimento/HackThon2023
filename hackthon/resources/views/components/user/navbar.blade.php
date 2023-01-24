<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/atendente/dashboard">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Marcação</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                  <li class="dropdown-item"><a href="route('logout')" onclick="event.preventDefault();
                              this.closest('form').submit();"><i class="feather icon-log-out m-r-5"></i>{{ __('Log Out') }}</a></li>
              </form>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>