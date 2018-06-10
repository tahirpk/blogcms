<nav class="navbar has-shadow">
  <div class="container">
    <div class="navbar-brand">
      <a class="navbar-item is-paddingless brand-item">
        <img src="{{ asset('img/devmarketer-logo.png') }}" alt="DevMarketer Logo">
      </a>

      <button class="button navbar-burger">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
    <div class="navbar-menu">
      <div class="navbar-start">
        <a href="#" class="navbar-item is-tab m-l-10">Learn</a>
        <a href="#" class="navbar-item is-tab">Discuss</a>
        <a href="#" class="navbar-item is-tab">Share</a>
      </div>

      <div class="navbar-end">
        @if (Auth::guest())
          <a href="{{ route('login') }}" class="navbar-item is-tab">Login</a>
          <a href="{{ route('register') }}" class="navbar-item is-tab">Join the Comunity</a>
        @else
          <div class="navbar-item has-dropdown is-hoverable">
            <a href="#" class="navbar-link">
              Hey {{ Auth::user()->name }}
            </a>
            <div class="navbar-dropdown is-right">
              <a href="" class="navbar-item">
                  <span class="icon">
                      <i class="fa fa-fw fa-user-circle-o m-r-5"></i>
                  </span>Profile
              </a>
              <a href="" class="navbar-item">
                  <span class="icon">
                      <i class="fa fa-fw fa-bell m-r-5"></i>
                  </span>Notifications
              </a>
              <a href="" class="navbar-item">
                  <span class="icon">
                      <i class="fa fa-fw fa-cog m-r-5"></i>
                  </span>Manage site
              </a>
              <hr class="navbar-divider">
              <a href="{{ route('logout') }}" class="navbar-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <span class="icon">
                      <i class="fa fa-fw fa-sign-out m-r-5"></i>
                  </span>Logout
              </a>
              @include ('_includes.forms.logout')
            </div>
          </div>
        @endif
      </div>

    </div>
  </div>
</nav>