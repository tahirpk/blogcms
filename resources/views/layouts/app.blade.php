<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
   

<div id="app">

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
        @if ( Auth::guest())
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
              
              
              <span class="icon">
                        <i class="fa fa-fw fa-sign-out m-r-5"></i>
              </span>
                <a href="{{route('logout')}}">Logout</a>
             
              
            </div>
          </div>
        @endif
      </div>

    </div>
  </div>
</nav>
 
            @yield('content')
       
</div>
</body>
</html>
