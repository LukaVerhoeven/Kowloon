<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kowloon</title>
        <link rel="shortcut icon" type="image/png" href="@yield('favicon')"/>
        <!-- Fonts -->
        <link rel="stylesheet" href="/css/main.css" />
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        @yield('css')

    </head>
    <body>

      <div class="sidebar">
        <ul>
          <li><a href="#"><i class="menu"></i></a></li>
          <li><a href="#"><i class="search"></i></a></li>
          <li><a href="#"><i href="#" class="ask"></i></a></li>
          <li class="line"></li>
        </ul>
        <ul class="catergory-menu">
          <li><a href="/dogs"><i class="dog"></i></a></li>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      	<script src="/js/sidebar-menu.js"></script>
          @yield('script')

    </body>
</html>
