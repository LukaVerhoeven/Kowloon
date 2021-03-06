<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kowloon</title>
        <link rel="shortcut icon" type="image/png" href="@yield('favicon')"/>
        <!-- Fonts -->
        <link rel="stylesheet" href="/css/all.css" />
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        @yield('css')

    </head>
    <body id="body">

      <div class="hamburger mobile-only">

      </div>
      <div class="sidebar no-mobile">
        <ul>
          <li><a href="#"><i class="menu"></i></a></li>
          <li><a href="#"><i class="search"></i></a></li>
          <li><a href="#"><i href="#" class="ask"></i></a></li>
          <li><a href="about"><i href="#" class="about-icon"></i></a></li>
          <li class="line"></li>
        </ul>
        <ul class="catergory-menu">
          <li><a href="/dogs"><i class="dog @yield('active')"></i></a></li>
          <li><a href="#"><i class="cat"></i></a></li>
          <li><a href="#"><i class="fish"></i></a></li>
          <li><a href="#"><i class="bird"></i></a></li>
          <li><a href="#"><i class="rats"></i></a></li>
        </ul>
        <ul>
          <li class="kowloon-menu"></li>
        </ul>
      </div>
      <div class="full-sidebar hidden">
        <div class="sidebar">
          <ul>
            <li><a href="#"><i class="menu"></i></a></li>
            <li><a href="#"><i class="search"></i><p>Search</p></a></li>
            <li><a href="#"><i href="#" class="ask"></i><p>FAQ</p></a></li>
            <li><a href="about"><i href="#" class="about-icon"></i><p>About</p></a></li>
            <li class="line"></li>
          </ul>
          <ul class="catergory-menu">
            <li><a href="/dogs"><i class="dog"></i><p>Dog</p></a></li>
            <li><a href="#"><i class="cat"></i><p>Cat</p></a></li>
            <li><a href="#"><i class="fish"></i><p>Fish</p></a></li>
            <li><a href="#"><i class="bird"></i><p>Bird</p></a></li>
            <li><a href="#"><i class="rats"></i><p>Small animals</p></a></li>
          </ul>
          <ul>
            <li class="kowloon-menu full-kowloon"></li>
          </ul>
        </div>
      </div>
      <div class="main">
        @yield('content')
      </div>
      @include('search')
      @include('FAQ')
      @include('cookie')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        {{-- <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script> --}}
      	<script src="/js/all.js"></script>
        <script src="/js/priceslider.js"></script>
        {{-- google analitics --}}
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-90269735-1', 'auto');
            ga('send', 'pageview');

          </script>
          @yield('script')

    </body>
</html>
