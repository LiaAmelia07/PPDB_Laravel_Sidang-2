<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="home"><img src="{{asset('assets/assets/img/logo.png')}}" alt="Image" height="90" width="100"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/ppdb/home">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('daftar.create')}}">Register PPDB</a>
      </li>
      <li class="nav-item">
      @auth
        <form action="/ppdb/logout" method="post">
            @csrf
            <button type="submit" class="nav-item nav-link">Logout</button>
        </form>
          @else
            <a class="nav-link" href="/ppdb/login">Login</a>
      @endauth
      </li>

    </ul>
  </div>
</nav>
