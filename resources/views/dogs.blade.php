@extends('layouts.app-layout')
@section('favicon', '/img/favicon/1-Kowloon---general-icon.png')
@section('css')
<link rel="stylesheet" href="/css/slider.css" />
@endsection
@section('script')
<script src="/js/jquery.slides.js"></script>
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
      <header>
        <img src="img/white-k.png" alt="">

        <span class="triangle"></span><a href="#"><span class="circle"></span>Dogs</a>
        <span class="triangle"></span><a href="#">Splash 'n Fun</a>
      </header>
      <h1>DOG ARTICLES.</h1>
      <ul class="hot-item-list">
        <li><div class="img"><div class="overlay"><img src="/img/info-hot.png" alt="info kader"> <p>view details</p></div></div> <p>Cooling mat <span class="prijs">€ 15,49</span></p></li>
        <li><div class="img"><div class="overlay"><img src="/img/info-hot.png" alt="info kader"> <p>view details</p></div></div><p>Cooling mat <span class="prijs">€ 15,49</span></p></li>
        <li><div class="img"><div class="overlay"><img src="/img/info-hot.png" alt="info kader"> <p>view details</p></div></div> <p>Cooling mat <span class="prijs">€ 15,49</span></p></li>
        <li><div class="img"><div class="overlay"><img src="/img/info-hot.png" alt="info kader"><p>view details</p></div></div><p>Cooling mat <span class="prijs">€ 15,49</span></p></li>
        <div class="corner"><div class="corner2"></div></div>


      </ul>
      <a href="#" class="visit">Visit the store</a>
    </div>
  </div>
@endsection
