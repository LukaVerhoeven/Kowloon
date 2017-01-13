@extends('layouts.app-layout')
@section('favicon', '/img/favicon/2-Kowloon---dogs-icon.png')
  @section('css')
    <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
    {{-- <link rel="stylesheet" href="/css/slider.css" />
    <link rel="stylesheet" href="/css/priceslider.css" /> --}}
  @endsection
  @section('script')
    {{-- <script src="/js/jquery.slides.js"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    {{-- <script src="/js/priceslider.js"></script> --}}
    {{-- <script src="/js/foldout-filter.js"></script> --}}
  @endsection
  @section('content')
@section('active', 'active-dog')
    <img class="imgoverlay" src="/img/kowloonLogo.png" alt="kowloon Logo">
    <div class="container">
      <div id="slides">
        <img src="img/hond.png" alt="Photo by: Missy S Link: http://www.flickr.com/photos/listenmissy/5087404401/">
        <img src="img/hond2.png" alt="Photo by: Daniel Parks Link: http://www.flickr.com/photos/parksdh/5227623068/">
        <img src="img/hond.png" alt="Photo by: Mike Ranweiler Link: http://www.flickr.com/photos/27874907@N04/4833059991/">
        <img src="img/hond2.png" alt="Photo by: Stuart SeegerLink: http://www.flickr.com/photos/stuseeger/97577796/">
      </div>
    </div>
    <div class="content productview">
      <div class="hot-items">

        <div class="head">
          <nav>
            <img src="img/white-k.png" alt="the k of the kownloon logo">
            <span class="triangle"></span><a href="/"><span class="circle"></span>Dogs</a>
            <span class="triangle"></span><a href="#">Splash 'n Fun</a>
          </nav>

          <h1>DOG ARTICLES.</h1>
          <button class="filter">Filter</button>
          <div class="filterdiv">
            <h2>By collection</h2>
            <div class="checkboxlist">
              <div class="checkbox "><input id="splash" type="checkbox" name="splash" value="Splash 'n Fun"> <label for="splash" id="splash-sort">Splash 'n Fun</label></div>
              <div class="checkbox "><input id="luxury" type="checkbox" name="luxury" value="Luxury"><label for="luxury" id="luxury-sort">Luxury</label></div>
              <div class="checkbox "><input id="new" type="checkbox" name="new" value="new"><label for="new"  id="new-sort">new</label></div>
              <div class="checkbox "><input id="onsale" type="checkbox" name="onsale" value="on sale"><label for="onsale" id="sale-sort">on sale</label></div>
              <div class="checkbox "><input id="other" type="checkbox" name="other" value="other"><label for="other" id="other-sort">other</label></div>
            </div>
            <h2>Price range</h2>
            <div class="slider">
              <div id="slider"></div>
            </div>
            <div class="price-input"><span>€</span><input type="number" name="min-value" value="0.00" class="min-price" step='0.01' id="min-price"></div>
            <span class="dash">-</span>
            <div class="price-input"><span>€</span><input type="number" name="max-value" value="499.00" class="max-price" step='0.01' id="max-price"></div>
          </div>
        </div>

        <div class="items">
          <div class="select">
            <select class="price-filter-select">
              <option value="lowhigh" class="hidden">Price: low to high</option>
              {{-- <option value="highlow">Price: high to low</option>
              <option value="latest">Latest</option>
              <option value="oldest">Oldest</option> --}}
            </select>
            <ul class="price-filter hidden">
              <li><a id="lowhigh">Price: low to high</a></li>
              <li><a id="highlow">Price: high to low</a></li>
              <li><a id="latest">Latest</a></li>
              <li><a id="oldest">Oldest</a></li>
            </ul>
          </div>

          <div class="amountitems no-mobile">
            <p class="itemcount"><span class="loadamount">5</span> of <span class="allamount">56</span></p>
            <p>Dog items:</p>

          </div >

          <ul class="hot-item-list ">

            <div class="scroll">

            <li data-cathegory="splash-sort" data-date="2016-12-15"><div class="img-overflow">
              <div class="item-colors" >
                <a href="#" class="color-white"></a>
                <a href="#" class="color-black"></a>
                <a href="#" class="color-blue"></a>
              </div>
              <a href="/productview"><img src="/img/products/product1.jpg" alt="info kader"></div><div class="overlay"><i class="product-icon"></i><p>view details</p></div></a> <p>Cooling mat <span class="prijs">€ 16,49</span></p></li>
            <li  data-cathegory="luxury-sort new-sort" data-date="2016-12-16"><div class="img-overflow">
              <div class="item-colors">
                <a href="#" class="color-white"></a>
                <a href="#" class="color-black"></a>
                <a href="#" class="color-blue"></a>
              </div>
              <a href="/productview"><img src="/img/products/product1.jpg" alt="info kader"></div><div class="overlay"><i class="product-icon"></i><p>view details</p></div></a> <p>Cooling mat <span class="prijs">€ 13,49</span></p></li>
            <li class="no-tablet" data-cathegory="new-sort" data-date="2016-12-13"><div class="img-overflow">
              <div class="item-colors">
                <a href="#" class="color-white"></a>
                <a href="#" class="color-black"></a>
                <a href="#" class="color-blue"></a>
              </div>
              <a href="/productview"><img src="/img/products/product1.jpg" alt="info kader"></div><div class="overlay"><i class="product-icon"></i><p>view details</p></div></a> <p>Cooling mat <span class="prijs">€ 15,49</span></p></li>
              <li class="stack-list" data-cathegory="sale-sort" data-date="2016-12-14">
                <div class="corner"><div class="corner2"></div></div>
                <div class="stack"><a href="/productview"><i class="stack-icon"></i><div class="img-overflow"><img src="/img/products/product1.jpg" alt="info kader"></div><div class="overlay">
                <i class="product-icon"></i><p>view details</p></div> </a> <p>Cooling mat <span class="prijs">€ 14,49</span></p></div>
              </li>

              </div>
              <div id="result_wrapper">

              </div>
          </ul>

          <div class="bigitem no-tablet no-mobile">
            <div class="img-overflow">
              <div class="item-colors">
                <a href="#" class="color-white"></a>
                <a href="#" class="color-black"></a>
                <a href="#" class="color-blue"></a>
              </div>
              <img src="/img/products/product1.jpg" alt="">
            </div>
            <div class="bigtext">
              <h2>Cooling mat</h2>
              <p>Hier komt een deel van de beschrijvende tekst die bij elk product hoort. Ook terug te vinden in het product detail.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius....</p>
              <p class="prijs">€15,49</p>
              <input type="button" name="" value="Want to know more?">
            </div>
          </div>
        </div>


      </div>
    </div>
    </div>
  @endsection
