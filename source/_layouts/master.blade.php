<!doctype html>
<html class="" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>
    @yield('title', 'Grant Fowlds | Wildlife Conservationist')
  </title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link rel="stylesheet" href="https://use.typekit.net/hsj1qit.css">

  <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

  @yield('head')
</head>

<body class="body-type text-black leading-normal pt-20 {{ $bodyClasses ?? '' }}">
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  
  @yield('body')
  @include('_layouts.footer')
  @include('_layouts/navbar')
  <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
