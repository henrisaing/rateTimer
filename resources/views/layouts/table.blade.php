<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>RateTimer</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/google.fonts.css')}}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}" >
    <link rel="stylesheet" href="{{URL::asset('assets/css/main.css')}}" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="{{URL::asset('assets/css/flat.css')}}" media="screen" title="no title" charset="utf-8">

  <!-- Scripts -->
  <script>
    window.Laravel = {!! json_encode([
      'csrfToken' => csrf_token(),
    ]) !!};
  </script>
</head>
<body>
  <div id="app">
    <nav id="nav-bar-top">
      <ul>
        <li>
          <a href="/home">
            Rate Timer
          </a>
        </li>

        @if (Auth::guest())
          <li class="float-right"><a href="/login">Login</a></li>
          <li class="float-right"><a href="/register">Register</a></li>
        @else
          <li class="float-right"><a href="/logout">Logout</a>
          <!-- <li class="float-right"><a href="/logout" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
          <form id="logout-form" action="/logout" method="POST" style="display: none;">{{ csrf_field() }}</form> -->
          <li class="float-right"><a href="/home">Welcome {{ Auth::user()->name }}!</a></li>
        @endif
      </ul>
    </nav>

      <div id="contain">

        @yield('content')
        
      </div>
  </div>

  <!-- JavaScripts -->
    <script type="text/javascript" src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/js/main.js')}}"></script>
</body>
</html>
