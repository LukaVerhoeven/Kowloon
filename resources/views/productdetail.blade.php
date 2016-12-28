@extends('layouts.app-layout')
@section('favicon', '/img/favicon/1-Kowloon---general-icon.png')
  @section('css')
    <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
    <link rel="stylesheet" href="/css/slider.css" />
    <link rel="stylesheet" href="/css/priceslider.css" />
  @endsection
  @section('script')
    <script src="/js/jquery.slides.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="/js/priceslider.js"></script>
    <script src="/js/foldout-filter.js"></script>
  @endsection
  @section('content')


    <div class="content productdetail">
      <img class="logo" src="/img/kowloonLogo.png" alt="kowloon Logo">

      <div class="product">

        <div class="imgview">
          <img src="/img/bigitem.jpg" alt="picture of the product" class="bigtile">
          <div class="smalltile">
              <img src="/img/bigitem.jpg" alt="">
              <p>woordje tekst</p>
          </div>
          <div class="smalltile">
              <img src="/img/bigitem.jpg" alt="">
              <p>woordje tekst</p>
          </div>
          <div class="smalltile">
              <img src="/img/bigitem.jpg" alt="">
              <p>woordje tekst</p>
          </div>
        </div>

        <div class="product-info">
          <nav>
            <img src="img/white-k.png" alt="the k of the kownloon logo">
            <span class="triangle"></span><a href="/"><span class="circle"></span>Dogs</a>
            <span class="triangle"></span><a href="#">Splash 'n Fun</a>
          </nav>
          <h1>COOLING MAT</h1>
          <h2>€15,49</h2>
          <h3>Colors</h3>
          <div class="item-colors">
            <a href="#" class="color-white"></a>
            <a href="#" class="color-black"></a>
            <a href="#" class="color-blue"></a>
          </div>
          <h3>Description</h3>
          <p>Hier komt een de volledige beschrijvende tekst met een max. aantal karakters. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea clit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat consectetur.</p>
        </div>

      </div>
      
      <div class="spec">

      </div>
      <div class="other-products">

      </div>
      <div class="FAQ">

      </div>
      <div class="newsletter">
        <div class="news-img">
          <h2>discover amazing Knowloon deals!</h2>
          <h4>only in our newsletter</h4>
        </div>
        <div class="news-form">
          <h3>Subscribe to our newsletter</h3>
          <p>Lorum ipsum dolor sit amet..</p>
          <input type="text" name="" value="Domain @ name.com">
          <input type="submit" name="" value="OK">
        </div>

      </div>


    </div>
  @endsection
