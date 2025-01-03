<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>Pcig</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('lineawesome/css/line-awesome.min.css') }}" rel="stylesheet">
        
        <!-- Styles -->
        <script src="{{ asset('bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/js/bootstrap.min.js') }}"></script>
       
        <link href="{{ asset('bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/css/bootstrap.min.css') }}" rel="stylesheet">
        
       <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .bg-navbar-transparent {
              background: linear-gradient( to bottom,rgba(29, 11, 41, 0.65),rgba(0,0,0,0.43), transparent);
            }
            .bg-primary{
              background-color: #480ca8 !important;
              color: white !important;
            }
            .bg-primary:hover{
              background-color:#5a189a !important;
            }
            .bg-primary-alt{
              background-color: #6163B5;
            }
            .text-primary{
               color: #480ca8 !important;
            }
            .rotate {
             transform: rotate(10deg);
            }

            .item:after {
            content:"";
            position:absolute;
            top:0;
            bottom:0;
            left:0;
            right:0;
            background:rgba(0,0,0,0.55);
            }
        </style>
    </head>
    <body class="bg-white">
        <!--create navigation -->
        <nav class="navbar navbar-expand-lg px-2 px-lg-5 fixed-top bg-navbar-transparent">
          <!--<div class="container-fluid">-->
            <a class="navbar-brand text-black" href="/">
             <!--<img src="images/main/logo.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">-->
             <img src="{{ asset('/images/default/logo.ico')}}" alt="" class="rounded-circle" width="37" height="34"> 
             <strong class="fs-6 text-white">Peterson Clor International</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="la la-bars fs-1 text-white"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
               
              </ul>
            
              <ul class="navbar-nav d-flex">
                  <li class="nav-item">
                    <a class="nav-link text-white" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('brands.show') }}">Subsidiaries</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="/downloads/all">Downloads</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('news') }}">News</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('about') }}">About</a>
                  </li>
                
                  <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('contact') }}">Contact</a>
                  </li>
                 
                  <li class="nav-item">
                    @auth

                        <a class="btn btn-outline-dark" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <span class="la la-sign-out"></span><span> Logout</span>
                                    </a>

                                      
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                    
                    @endauth    
                  </li>
                </ul>
                
              <!--
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
               -->
            </div>
          <!--</div>-->
        </nav>
        <main class="">
        @include('alerts.messages')
        @yield('content')
        </main>


        <footer class="bg-dark p-5">
          <br><br>
          <div class="row">
          <div class="col-12 col-md-6 col-lg-4">
            <div class="row">
              <div class="col-3">
                <a href="/"><h6 class="text-secondary font-weight-bolder"><strong>HOME</strong></h6></a>
                 </div>
              <div class="col-3">
             <a href="/contact"><h6 class="text-secondary font-weight-bolder"><strong>CONTACT</strong></h6></a>
              </div>
              <div class="col-3">
                <a href="/about"><h6 class="text-secondary font-weight-bolder"><strong>ABOUT</strong></h6></a>
              </div>
              <div class="col-3">
                <a href="/downloads/all"><h6 class="text-secondary font-weight-bolder"><strong>DOWNLOADS</strong></h5></a>
              </div>
              </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
          <center>
          <div class="container-fluid">
            <a href=""><span class="text-white fs-4">P|T</span></a>
          </div>
          </center>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="row">
              <div class="col-3">
             <a href=""><h6 class="text-secondary font-weight-bolder"><span class="la la-facebook fs-4"></span></h6></a>
              </div>
              <div class="col-3">
                <a href=""><h6 class="text-secondary font-weight-bolder"><span class="la la-twitter fs-4"></span></h6></a>
              </div>
              <div class="col-3">
                <a href=""><h6 class="text-secondary font-weight-bolder"><span class="la la-instagram fs-4"></span></h5></a>
              </div>
              <div class="col-3">
                <a href=""><h6 class="text-secondary font-weight-bolder"><span class="la la-phone fs-4"></span></h5></a>
              </div>
              </div>
          </div>
          </div>
          <br>
          <div class="container bg-secondary my-lg-4" style="height: 1px;"></div>
          <div class="py-3">
           <h5 class="text-secondary text-center">© 2013-2022 Petterson Clor International Group of Companies.</h5>
          </div>
          <div>
            <center>
              <span class="text-secondary"><a href="/privacy">Privacy</a> | </span>
              <span class="text-secondary"><a href="/disclaimer">Disclaimer</a> | </span>
              <span class="text-secondary"><a href="/terms">Terms & Conditions</a></span>
            </center>
          </div>
        </footer>

       <!--scripts-->
       <script src="{{ asset('js/jquery.js') }}" ></script>
      
        <!--multiple carousel script-->
        <script>
          var multipleCardCarousel = document.querySelector(
          "#carouselExampleControls"
        );
        if (window.matchMedia("(min-width: 768px)").matches) {
          var carousel = new bootstrap.Carousel(multipleCardCarousel, {
            interval: false,
          });
          var carouselWidth = $("#carouselExampleControls .carousel-inner")[0].scrollWidth;
          var cardWidth = $("#carouselExampleControls .carousel-item").width();
          var scrollPosition = 0;
          $("#carouselExampleControls .carousel-control-next").on("click", function () {
            if (scrollPosition < carouselWidth - cardWidth * 4) {
              scrollPosition += cardWidth;
              $("#carouselExampleControls .carousel-inner").animate(
                { scrollLeft: scrollPosition },
                600
              );
            }
          });
          $("#carouselExampleControls .carousel-control-prev").on("click", function () {
            if (scrollPosition > 0) {
              scrollPosition -= cardWidth;
              $("#carouselExampleControls .carousel-inner").animate(
                { scrollLeft: scrollPosition },
                600
              );
            }
          });
        } else {
          $(multipleCardCarousel).addClass("slide");
        }
        </script>
    </body>
    </html>
