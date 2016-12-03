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


      <div class="content">
        <div class="text">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="icons">
          <ul class="catergory-content">
            <li><a href="#" class="dog-content"><p>DOGS</p></a><span class="cathegory-line"></span></li>
            <li><a href="#" class="cat-content"><p>CATS</p></a><span class="cathegory-line"></span></li>
            <li><a href="#" class="fish-content"><p>FISH</p></a><span class="cathegory-line"></span></li>
            <li><a href="#" class="bird-content"><p>BIRDS</p></a><span class="cathegory-line"></span></li>
            <li><a href="#" class="rat-content"><p class="small-p"><span class="small-text">SMALL</span> ANIMALS</p></a><span class="cathegory-line"></span></li>
            <li><a href="#" class="other-content"><p class="other-text">OTHER</p></a></li>

          </ul>

        </div>
        <div class="hot-items">
          <h1>HOT ITEMS.</h1>
          <ul class="hot-item-list">
            <li><div class="img"><div class="overlay"><img src="/img/info-hot.png" alt="info kader"> <p>view details</p></div></div> <p>Cooling mat <span class="prijs">€ 15,49</span></p></li>
            <li><div class="img"><div class="overlay"><img src="/img/info-hot.png" alt="info kader"> <p>view details</p></div></div><p>Cooling mat <span class="prijs">€ 15,49</span></p></li>
            <li><div class="img"><div class="overlay"><img src="/img/info-hot.png" alt="info kader"> <p>view details</p></div></div> <p>Cooling mat <span class="prijs">€ 15,49</span></p></li>
            <li><div class="img"><div class="overlay"><img src="/img/info-hot.png" alt="info kader"> <p>view details</p></div></div> <p>Cooling mat <span class="prijs">€ 15,49</span></p></li>
          </ul>
          <a href="#" class="visit">Visit the store</a>
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
