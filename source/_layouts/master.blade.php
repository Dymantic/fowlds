<!doctype html>
<html class="" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>
    @yield('title', 'Grant Fowlds | Wildlife Conservationist')
  </title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="https://use.typekit.net/hsj1qit.css">

  <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

  <link rel="apple-touch-icon" sizes="180x180" href="/assets/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon-16x16.png">
<link rel="manifest" href="/assets/site.webmanifest">
<link rel="mask-icon" href="/assets/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#aab0bc">

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
