@extends('layouts.app-layout')
@section('favicon', '/img/favicon/1-Kowloon---general-icon.png')
@section('css')
{{-- <link rel="stylesheet" href="/css/slider.css" /> --}}
@endsection
@section('script')
{{-- <script src="/js/jquery.slides.js"></script> --}}
@endsection
@section('content')

      <img class="imgoverlay" src="/img/kowloonLogo.png" alt="kowloon Logo">
      <div class="container">
        <div id="slides">
          <img src="img/hond.png" alt="Cute dog picture from kowloon">
          <img src="img/hond2.png" alt="Cute dog picture from kowloon">
          <img src="img/hond.png" alt="Cute dog picture from kowloon">
          <img src="img/hond2.png" alt="Cute dog picture from kowloon">
        </div>
      </div>


      <div class="content">
        <div class="text">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="icons">
          <ul class="catergory-content">
            <li><a href="dogs" class="dog-content"><p>DOGS</p></a><span class="cathegory-line"></span></li>
            <li><a href="#" class="cat-content"><p>CATS</p></a><span class="cathegory-line no-mobile"></span></li>
            <li><a href="#" class="fish-content"><p>FISH</p></a><span class="cathegory-line"></span></li>
            <li><a href="#" class="bird-content"><p>BIRDS</p></a><span class="cathegory-line no-mobile"></span></li>
            <li><a href="#" class="rat-content"><p class="small-p"><span class="small-text">SMALL</span> ANIMALS</p></a><span class="cathegory-line"></span></li>
            <li><a href="#" class="other-content"><p class="other-text">OTHER</p></a></li>

          </ul>

        </div>
        <div class="hot-items">
          <h1>HOT ITEMS.</h1>
          <ul class="hot-item-list no-mobile">
            <li class="no-tablet"><div class="img-overflow ">
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

          <ul class="hot-item-list hot-mobile mobile-only">
            <li class="no-tablet"><div class="img-overflow ">
              <img src="/img/products/product1.jpg" alt="info kader"></div>
            </li>
            <li class="no-tablet"><div class="img-overflow ">
              <img src="/img/products/product1.jpg" alt="info kader"></div>
            </li>
            <li class="no-tablet"><div class="img-overflow ">
              <img src="/img/products/product1.jpg" alt="info kader"></div>
            </li>
            <li class="no-tablet"><div class="img-overflow ">
              <img src="/img/products/product1.jpg" alt="info kader"></div>
            </li>
          </ul>

          <a href="#" class="link">Visit the store</a>
        </div>
        <div class="newsletter">
          <div class="news-img">
            <h2>discover amazing Knowloon deals!</h2>
            <h4>only in our newsletter</h4>
          </div>
          <div class="news-form">
            <form class="" action="/subscriber" method="post">
              {{ csrf_field() }}
              <h3>Subscribe to our newsletter</h3>
              <p>Lorum ipsum dolor sit amet..</p>
              <input type="text" name="email" value="Domain @ name.com">
              <input type="submit" name="" value="OK">
            </form>
          </div>

        </div>
      </div>
@endsection
