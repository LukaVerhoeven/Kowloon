@extends('layouts.app-layout')
@section('favicon', '/img/favicon/1-Kowloon---general-icon.png')
  @section('css')

  @endsection
  @section('script')
    {{-- <script src="/js/foldout-filter.js"></script> --}}
  @endsection
  @section('content')

    <div class="container">
      <img class="imgoverlay" src="/img/kowloonLogo.png" alt="kowloon Logo">
      <img class="bannerimg" src="/img/banners/about.jpg" alt="bannerimage of a person that hugs a dog for kowloon">
    </div>

    <div class="content about">
      <nav>
        <img src="img/white-k.png" alt="the k of the kownloon logo">
        <span class="triangle"></span><a href="/">about us</a>
      </nav>
      <h1>ABOUT US</h1>
      <div class="kowloon">
        <h2 class="">KOWLOON</h2>
        <p>Pet Concept, active since 1998, is developing, importing and exporting products for pets worldwide.</br></br>

          natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae sequi nesciunt.</p>

        </div>
        <div class="contact">
          <h2>CONTACT</h2>
          <ul>
            <li>Deckx Johan</li>
            <li>Bosdreef 7</li>
            <li>2200 Herentals</li>
          </ul>

        </div>
        <div class="message">
          <h2>LEAVE US A MESSAGE</h2>
          <form class="" action="index.html" method="post">
            <label for="e-mail">E-mail</label>
            <input type="e-mail" name="e-mail" placeholder="name@domain.com" id="e-mail">
            <label for="message">Your message</label>
            <textarea id="message" name="message" rows="8" cols="100" placeholder="Write your message here."></textarea>
            <input type="submit" name="submit" value="Send" class="formsubmit">
          </form>
        </div>
        <div class="FAQ">
          <h2>FREQUENTLY ASKED QUESTIONS</h2>
          <div class="question">
            <button class="filter point-right">Dit is een vraag</button>
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
            <button class="filter point-right">Dit is een vraag</button>
            <div class="filterdiv closed">
              <p class="hidden">Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..</p>
            </div>
          </div>

        </div>

      </div>
    @endsection
