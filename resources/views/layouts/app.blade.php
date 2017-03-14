<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RateTimer</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/google.fonts.css')}}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}" >
    <link rel="stylesheet" href="{{URL::asset('assets/css/main.css')}}" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="{{URL::asset('assets/css/flat.css')}}" media="screen" title="no title" charset="utf-8">

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Rate Timer
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->


                <!-- Right Side Of Navbar -->

            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script type="text/javascript" src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/js/main.js')}}"></script>
</body>
</html>
