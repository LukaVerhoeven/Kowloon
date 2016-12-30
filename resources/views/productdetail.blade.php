@extends('layouts.app-layout')
@section('favicon', '/img/favicon/2-Kowloon---dogs-icon.png')
  @section('css')

  @endsection
  @section('script')
    {{-- <script src="/js/foldout-filter.js"></script>
    <script src="/js/slider-detail.js"></script> --}}

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
        <h2>Specifications</h2>
        <h3>DIMENSIONS</h3>
          <ul>
            <li><span class="bold">S</span> - Ø 53x18cm </li>
            <li><span class="bold">M</span> - Ø 53x18cm </li>
            <li><span class="bold">L</span> - Ø 53x18cm </li>
          </ul>
        <h3>TITEL</h3>
        <p><span class="bold">S</span> - hier komt technische tekst</p>

      </div>

      <div class="other-products">
        <h1>GERELATEERDE PRODUCTEN</h1>
        <div class="item-slider">

          <ul class="hot-item-list">
            <li><div class="img"><div class="overlay"><img src="/img/info-hot.png" alt="info kader"> <p>view details</p></div></div></li>
            <li><div class="img"><div class="overlay"><img src="/img/info-hot.png" alt="info kader"> <p>view details</p></div></div></li>
            <li><div class="img"><div class="overlay"><img src="/img/info-hot.png" alt="info kader"> <p>view details</p></div></div></li>
            <li><div class="img"><div class="overlay"><img src="/img/info-hot.png" alt="info kader"> <p>view details</p></div></div></li>
            <li><div class="img"><div class="overlay"><img src="/img/info-hot.png" alt="info kader"> <p>view details</p></div></div></li>
            <li><div class="img"><div class="overlay"><img src="/img/info-hot.png" alt="info kader"> <p>view details</p></div></div></li>
            <li><div class="img"><div class="overlay"><img src="/img/info-hot.png" alt="info kader"> <p>view details</p></div></div></li>
          </ul>
          <div class="prev"></div>
          <div class="next"></div>

        </div>
      </div>

      <a href="#" class="link">view more</a>

      <div class="FAQ">
        <h1>FREQUENTLY ASKED QUESTIONS</h1>
        <div class="question">
          <button class="filter">Dit is een vraag</button>
          <div class="filterdiv closed">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..</p>
          </div>
        </div>
        <div class="question">
          <button class="filter">Dit is een opengeklapte vraag</button>
          <div class="filterdiv">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..</p>
          </div>
        </div>
        <div class="question">
          <button class="filter">Dit is een vraag</button>
          <div class="filterdiv closed">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..</p>
          </div>
        </div>

      </div>

      <a href="#" class="link">More questions?</a>

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
