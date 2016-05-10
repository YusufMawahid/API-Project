<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Flat, Clean, Responsive, application admin template built with bootstrap 3">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
    <title> @yield('title') </title> @yield('css')
    
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/materialize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/materialize.min.css') }}">

</head>

<body>
    <div class="app">

<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>
<nav>
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo">Logo</a>
    <ul class="right hide-on-med-and-down">
      <li><a href="sass.html">Sass</a></li>
      <li><a href="badges.html">Components</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>
        
        <section class="layout"> @yield('content') </section>
    </div>
    <script src="{{ asset('assets/plugins/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/appear/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery.placeholder.js') }}"></script>
    <script src="{{ asset('assets/plugins/fastclick.js') }}"></script>
    <script src="{{ asset('assets/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/offscreen.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- <script src="{{ asset('assets/js/materialize.min.js') }}"></script>
    <script src="{{ asset('assets/js/materialize.js') }}"></script>
     -->@yield('js')</body>


</html>
