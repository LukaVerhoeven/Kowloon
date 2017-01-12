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
      <nav class="no-desktop">
        <img src="img/white-k.png" alt="the k of the kownloon logo">
        <span class="triangle"></span><a href="/"><span class="circle"></span>Dogs</a>
        <span class="triangle"></span><a href="#">Splash 'n Fun</a>
      </nav>
      <div class="left-tablet mobile-only">
        <h1>COOLING MAT</h1>
        <h2>€15,49</h2>
      </div>
      <div class="product">

        <div class="imgview">
          <div class="img-overflow bigtile">
            <div class="item-colors">
              <a href="#" class="color-white"></a>
              <a href="#" class="color-black"></a>
              <a href="#" class="color-blue"></a>
            </div>
            <i class="plus-icon"></i>
            <img src="/img/products/product1.jpg" alt="big image of a dog on a cooling mat">
          </div>
          <div class="smalltile">
            <div class="img-overflow active">
              <img src="/img/products/product1.jpg" alt="big image of a dog on a cooling mat">
            </div>
              <span class="tile-overlay active-tile"></span>
              <p class="no-mobile">woordje tekst</p>
          </div>
          <div class="smalltile">
            <div class="img-overflow">
              <img src="/img/products/product1.jpg" alt="big image of a dog on a cooling mat">
            </div>
              <span class="tile-overlay "></span>
              <p class="no-mobile">woordje tekst</p>
          </div>
          <div class="smalltile">
            <div class="img-overflow">
              <img src="/img/products/product1.jpg" alt="big image of a dog on a cooling mat">
            </div>
              <span class="tile-overlay "></span>
              <p class="no-mobile">woordje tekst</p>
          </div>
        </div>

        <div class="product-info">
          <nav class="no-tablet no-mobile">
            <img src="img/white-k.png" alt="the k of the kownloon logo">
            <span class="triangle"></span><a href="/"><span class="circle"></span>Dogs</a>
            <span class="triangle"></span><a href="#">Splash 'n Fun</a>
          </nav>
          <div class="left-tablet no-mobile">
            <h1>COOLING MAT</h1>
            <h2>€15,49</h2>
          </div>
          <div class="right-tablet">
            <h3>Colors</h3>
            <div class="item-colors">
              <a href="#" class="color-white"></a>
              <a href="#" class="color-black"></a>
              <a href="#" class="color-blue"></a>
            </div>
          </div>
          <h3>Description</h3>
          <p>Hier komt een de volledige beschrijvende tekst met een max. aantal karakters. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea clit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat consectetur.</p>
          <div class="obligatory-icon">
            <a class="square"></a>
            <a class="circle"></a>
            <a class="triangle"></a>
          </div>
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
        <div class="item-slider no-tablet">

          <ul class="hot-item-list ">
            <li><div class="img-overflow"><a href="/productview"><img src="/img/products/product1.jpg" alt="info kader"></div><div class="overlay"><i class="product-icon"></i><p>view details</p></div></a></li>
            <li><div class="img-overflow"><a href="/productview"><img src="/img/products/product1.jpg" alt="info kader"></div><div class="overlay"><i class="product-icon"></i><p>view details</p></div></a></li>
            <li><div class="img-overflow"><a href="/productview"><img src="/img/products/product1.jpg" alt="info kader"></div><div class="overlay"><i class="product-icon"></i><p>view details</p></div></a></li>
            <li><div class="img-overflow"><a href="/productview"><img src="/img/products/product1.jpg" alt="info kader"></div><div class="overlay"><i class="product-icon"></i><p>view details</p></div></a></li>
            <li><div class="img-overflow"><a href="/productview"><img src="/img/products/product1.jpg" alt="info kader"></div><div class="overlay"><i class="product-icon"></i><p>view details</p></div></a></li>
            <li><div class="img-overflow"><a href="/productview"><img src="/img/products/product1.jpg" alt="info kader"></div><div class="overlay"><i class="product-icon"></i><p>view details</p></div></a></li>
            <li><div class="img-overflow"><a href="/productview"><img src="/img/products/product1.jpg" alt="info kader"></div><div class="overlay"><i class="product-icon"></i><p>view details</p></div></a></li>
          </ul>
          <div class="prev no-mobile"></div>
          <div class="next no-mobile"></div>

        </div>
        <ul class="hot-item-list tablet-only">
          <li><div class="img-overflow">
            <div class="item-colors">
              <a href="#" class="color-white"></a>
              <a href="#" class="color-black"></a>
              <a href="#" class="color-blue"></a>
            </div>
            <img src="/img/products/product1.jpg" alt="info kader"></div><div class="overlay"><i class="product-icon"></i><p>view details</p></div> <p>Cooling mat <span class="prijs">€ 15,49</span></p></li>
          <li><div class="img-overflow">
            <div class="item-colors">
              <a href="#" class="color-white"></a>
              <a href="#" class="color-black"></a>
              <a href="#" class="color-blue"></a>
            </div>
            <img src="/img/products/product1.jpg" alt="info kader"></div><div class="overlay"><i class="product-icon"></i><p>view details</p></div> <p>Cooling mat <span class="prijs">€ 15,49</span></p></li>
          <li class="stack-list">
            <div class="corner"><div class="corner2"></div></div>
            <div class="stack"><i class="stack-icon"></i><div class="img-overflow"><img src="/img/products/product1.jpg" alt="info kader"></div><div class="overlay">
            <i class="product-icon"></i><p>view details</p></div> <p>Cooling mat <span class="prijs">€ 15,49</span></p></div>
          </li>



        </ul>
      </div>

      <a href="#" class="link">view more</a>

      <div class="FAQ">
        <h1>FREQUENTLY ASKED QUESTIONS</h1>
        <div class="question">
          <button class="filter">Dit is een vraag</button>
          <div class="filterdiv closed">
            <p class="hidden">Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..</p>
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
            <p class="hidden">Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..</p>
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
