<!DOCTYPE html>
<html class="html" lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Monte Christo Trade Corp.</title>

    <link href="/css/app.css" rel="stylesheet" type="text/css">
    @yield('additional-css')
    
</head>

<body>
    <!-- Navbar -->
    @include ('layouts.nav')

    <!-- Body Content -->
    @yield('body')

    <!-- Footer -->
    @include ('layouts.footer')

    <!--Source Javascript scripts-->
    <!-- Load jQuery, Google Analytics, and Bootstrap js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/js/app.js"></script>
    <script src="https://unpkg.com/vue@2.1.3/dist/vue.js"></script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-98692337-1', 'auto');
      ga('send', 'pageview');
    </script>

    @yield('additional-js')
</body>

</html>