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
              <div class="checkbox "><input id="splash" type="checkbox" name="splash" value="Splash 'n Fun"> <label for="splash">Splash 'n Fun</label></div>
              <div class="checkbox "><input id="luxury" type="checkbox" name="luxury" value="Luxury"><label for="luxury">Luxury</label></div>
              <div class="checkbox "><input id="new" type="checkbox" name="new" value="new"><label for="new" >new</label></div>
              <div class="checkbox "><input id="onsale" type="checkbox" name="onsale" value="on sale"><label for="onsale">on sale</label></div>
              <div class="checkbox "><input id="other" type="checkbox" name="other" value="other"><label for="other" >other</label></div>
            </div>
            <h2>Price range</h2>
            <div class="slider">
              <div id="slider"></div>
            </div>
            <div class="price-input"><span>€</span><input type="number" name="min-value" value="0.00" class="min-price" step='0.01'></div>
            <span class="dash">-</span>
            <div class="price-input"><span>€</span><input type="number" name="max-value" value="499.00" class="max-price" step='0.01'></div>
          </div>
        </div>

        <div class="items">
          <div class="select">
            <select>
              <option value="lowhigh">Price: low to high</option>
              <option value="highlow">Price: high to low</option>
              <option value="latest">Latest</option>
              <option value="oldest">Oldest</option>
            </select>
            <ul>
              <li><a href="#">Price: low to high</a></li>
              <li><a href="#">Price: high to low</a></li>
              <li><a href="#">Latest</a></li>
              <li><a href="#">Oldest</a></li>
            </ul>
          </div>

          <div class="amountitems">
            <p class="itemcount"><span class="loadamount">5</span> of <span class="allamount">56</span></p>
            <p>Dog items:</p>

          </div >

          <ul class="hot-item-list">
            <li><a href="/productview"><div class="img"><div class="overlay"><img src="/img/info-hot.png" alt="info kader"> <p>view details</p></div></div></a> <p>Cooling mat <span class="prijs">€ 15,49</span></p></li>
            <li><div class="img"><div class="overlay"><img src="/img/info-hot.png" alt="info kader"> <p>view details</p></div></div><p>Cooling mat <span class="prijs">€ 15,49</span></p></li>
            <li><div class="img"><div class="overlay"><img src="/img/info-hot.png" alt="info kader"> <p>view details</p></div></div> <p>Cooling mat <span class="prijs">€ 15,49</span></p></li>
            <li><div class="img"><div class="overlay"><img src="/img/info-hot.png" alt="info kader"><p>view details</p></div></div><p>Cooling mat <span class="prijs">€ 15,49</span></p></li>
          </ul>
          <div class="bigitem">
            <img src="/img/bigitem.jpg" alt="">
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
