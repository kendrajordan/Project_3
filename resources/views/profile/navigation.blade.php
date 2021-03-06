<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">BLumblr</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ">
      <li>
      <div class="full-height">
          @if (Route::has('login'))
              <div class="top-right links">
                  @auth
                      <a href="{{ url('/home') }}">Home</a>
                      <div>
                      <a href="{{ url('/logout') }}"> logout </a>
                    </div>
                  @else
                      <a href="{{ route('login') }}">Login</a>

                      @if (Route::has('register'))
                          <a href="{{ route('register') }}">Register</a>
                      @endif

                  @endauth
              </div>
          @endif
        </li>

      <li class="nav-item">
        <a class="nav-link" href="/">Group posts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/profile/create">Submit a post</a>
      </li>
    </ul>
  </div>
</nav>
