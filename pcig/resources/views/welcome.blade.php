@extends('layouts.panel')

@section('content')
<style>
 #carouselExampleControls .carousel-inner {
  padding: 1em;
}
#carouselExampleControls .card {
  margin: 0 0.5em;
  box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
  border: none;
}
#carouselExampleControls .carousel-control-prev,
#carouselExampleControls .carousel-control-next {
  background-color: #e1e1e1;
  width: 6vh;
  height: 6vh;
  border-radius: 50%;
  top: 50%;
  transform: translateY(-50%);
}


@media (min-width: 768px) {
  #carouselExampleControls .carousel-item {
    margin-right: 0;
    flex: 0 0 33.333333%;
    display: block;
  }
  #carouselExampleControls .carousel-inner {
    display: flex;
  }
  .main-image{
  height: 100vh;
}
.floating-div{
  width: 75%;
}
.social-icons{
  bottom:20px;
  left:80%;
}
}
#carouselExampleControls .card .img-wrapper {
    max-width: 100%;
    height: 13em;
    display: flex;
  
}
#carouselExampleControls .card .img-wrapper-short {
    max-width: 100%;
    height: 7em;
    display: flex;
  
}
#carouselExampleControls .card img {
    max-height: 100%;
}
@media (max-width: 767px) {
#carouselExampleControls .card .img-wrapper {
    height: 17em;
  }
  #carouselExampleControls .card .img-wrapper-short {
    height: 9em;
}
.main-image{
  height: 70vh;
}
.floating-div{
  width: 100%;
  left:0% !important;
}
.social-icons{
  bottom:20%;
  left:12%;
}
#subsidiary-container{
  overflow-x: auto;
}
}
</style>


<div id="carouselExampleDark" class="carousel carousel-light slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
  </div>
  <div class="carousel-inner">
    @foreach($mainData as $key => $data)
    @php
    $img = array_reverse(explode("~",$data))[2];
    @endphp
    <div class="carousel-item {{$key == 0 ? 'active' : '' }} position-relative">
      <div class="item"></div>
      <img src="{{ asset('images/main/'.$img) }}" class="d-block w-100 main-image" alt="...">
      <!--large screen-->
      <div class="carousel-caption d-none d-md-block position-absolute " style="top:22%;left:15%;">

        <h1 class="text-start display-2 fw-bold text-white"><span class="">{{ array_reverse(explode("~",$data))[1] }}</span></h1>
      
        <p class="text-start text wrap fw-lighter fs-2 lead text-light" style="width: 45rem">{{ array_reverse(explode("~",$data))[0] }}
        
        </p>
        <br>
        <div class="d-flex">
        <div class="p-2">
          <a href="/brands" class="btn btn-danger btn-lg mt-3 rounded-0 border-1 float-start">Consortium
            <strong class="la la-users fw-bolder text-white"></strong></a>
        </div>
        <div class="p-2">
          <a href="/about" class="btn btn-outline-light btn-lg mt-3 rounded-0 border-2 float-start">Learn more
            <strong class="la la-angle-right fw-bolder"></strong></a>
        </div>
        </div>
        
      </div>
      <!--small screen-->
      <div class="carousel-caption d-sm-block d-md-none position-absolute " style="top:17%;left:12%;">

        <h1 class="text-start fw-bold"><span class="">{{ array_reverse(explode("~",$data))[1] }}</span></h1>
      
        <h4 class="text-start">{{ array_reverse(explode("~",$data))[0] }}

      </h4>
      <div class="d-flex">
        <div class="p-2">
         <a href="/brands" class="btn btn-danger btn-lg mt-3 rounded-0 border-2 float-start">Consortium
            <strong class="la la-users fw-bolder text-white"></strong></a>
        </div>
        <div class="p-2">
         
        </div>
        </div>
      </div>
       <!--social icons -->
      <div class="container position-absolute social-icons">
        <a href="" ><span class="la la-envelope text-white fs-4 mr-2"></span></a>
      <a href="" ><span class="la la-twitter text-white fs-4"></span></a>
      <a href="" ><span class="la la-facebook text-white fs-4"></span></a>
      <a href="" ><span class="la la-instagram text-white fs-4"></span></a>
      </div>
      
    </div>
    @endforeach

    </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--logos-->

<div class="container-fluid py-5 bg-light p-2" id="subsidiary-container">
<div class="d-flex justify-content-center">
@foreach($logos as $logo)
<div class="p-3">
 <img src="{{ asset('images/logos/'.$logo) }}" class="rounded-lg bg-light" height="55px" weight="55px">
</div>
  @endforeach
</div>
</div>
<br><br>
<!--logos-->
<section class="px-lg-5 mx-lg-5">

<!--investment options-->
<div class="container-fluid my-lg-4 mt-sm-2 mx-0">
  <div class="container pl-5">
    <h6 class="text-primary fw-bold m-0" style=""><strong>MORE OF OUR OPPURTUNITIES</strong></h6>
    <h1 class="text-black fw-bold m-0"> <strong>Investment options</strong></h1>
    <hr class="container bg-primary"></hr>
  </div>



<div id="carouselExampleControls" class="carousel my-lg-5" data-bs-ride="carousel">
  <div class="carousel-inner">
    @foreach($investments as $key => $investment)
      <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
          <div class="card mx-lg-4 h-100 w-80 shadow-lg p-0 m-0">
              <div class="img-wrapper">
                <img src="{{ asset('images/investment/'.$investment->i_image) }}" class="img-fluid" width="100%" alt="..."> 
              </div>

              <div class="card-body">
                  <h6 class="card-title"><strong>{{ $investment->i_title}}</strong></h6>
                  <p class="card-text fs-6 text-secondary">
                    {{ $investment->i_body}} 
                  </p>
                  <a href="/investment/option/{{ $investment->id }}" class="btn bg-primary pr-5"><span class="mr-2">learn more</span><span class="la la-arrow-right"></span></a>
              </div>
          </div>
      </div>
      @endforeach
     
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

<!--About Us-->
<!--parallax about-->

</section>

<br>
<div class="container my-3 px-4 px-md-3">
<h6 class="text-primary fw-bold m-0"><strong>PETTERSON CLOR INTERNATIONAL GROUP</strong></h6>
<h1 class="m-0 text-black"><strong>About us</strong></h1>
<hr class="container bg-primary"></hr>
</div>
<br>
<div class="container px-4 px-md-3">
  <div class="row">
    <div class="col-12 col-md-6">
    <div class="container-fluid p-0">
      <strong class="text-primary">We are Africa's leading power house</strong>
      <br><br>
      <p class="text-black">
        PCIG is Nigeria's foremost wholly indigenous business group and a major player in the Nigerian,
        sub-regional, continental and global markets. The group is comprised of 5 independent divisions, 
        with each division consisting of strategically aligned subsidiaries. Each subsidiary is proudly a 
        trail blazing industry leader within its market sector.
       </p>
       <p class="text-black">
        PCIG is fully committed to Nigeria's nation building efforts and quest for continental
         economic dominance. The Group in line with this resolve has invested and continues to invest
          strategically in the Nigerian economy, and is a driving force in the following key sectors:
      <ol class="text-black">
        <li>Energy and Health care</li>
        <li>Infrastructure and Agriculture</li>
        <li>Man power and development</li>
      </ol>
       </p>
    </div>
    </div>
    <div class="col-12 col-md-6 d-none d-md-block">
      <div class="container-fluid p-0">
        <img src="{{ asset('images/main/about2.jpg') }}" width="80%" height="80%" class="d-none d-md-block rounded-2 float-end shadow-lg" alt="..."> 
    
      </div>
     
    </div>
  
  </div>
</div>

<!--parallax about-->
<!--<div class="container-fluid m-0 p-0 px-sm-3">
<div class="container-fluid position-relative" style="height:100vh;">
  <div class="item"></div>
  <img src="{{ asset('images/main/about2.jpg') }}" width="100%" height="100%" class="d-none d-md-block" style="float: right;" alt="..."> 
  
  <div class="container p-4 position-absolute shadow bg-white bg-opacity-25 mb-sm-5 floating-div" style="top:10%;left:2%;">
    <strong class="text-primary">We are Africa's leading power house</strong>
    <br>
    <p class="text-black">
      PCIG is Nigeria's foremost wholly indigenous business group and a major player in the Nigerian,
      sub-regional, continental and global markets. The group is comprised of 5 independent divisions, 
      with each division consisting of strategically aligned subsidiaries. Each subsidiary is proudly a 
      trail blazing industry leader within its market sector.
     </p>
     <p class="text-black">
      PCIG is fully committed to Nigeria's nation building efforts and quest for continental
       economic dominance. The Group in line with this resolve has invested and continues to invest
        strategically in the Nigerian economy, and is a driving force in the following key sectors:
    <ol class="text-black">
      <li>Energy and Health care</li>
      <li>Infrastructure and Agriculture</li>
      <li>Man power and development</li>
    </ol>
     </p>
     <button class="btn bg-primary rounded-0">Learn more </button>
  </div>            

</div>
</div>-->


<br><br>
<!--subscribe to mail-->
<div class="container px-4 px-md-3">
  <h6 class="text-primary fw-bold m-0" style=""><strong>GET IN TOUCH</strong></h6>
  <h1 class="text-black fw-bold m-0"> <strong>Contact us</strong></h1>
  <hr class="container bg-primary"></hr>
</div>
<section class="container-fluid p-lg-4 mt-5 bg-primary bg-gradient">
  
 <div class="container py-lg-5 py-sm-4 rounded-2">
  <div class="row">
    <div class="col-12 col-md-6 col-lg-6 d-lg-block">
     
      <div class="card border-0" style="background-color: transparent;">
        <div class="card-body">
          <h1 class="card-title text-white mb-1 fw-bold">Send us a message</h1>
          <p class="card-text my-0 fw-lighter w-75">Fill the form and our team would respond to you within 24 hours.</p>
           
          <ul class="list-group mt-4 bootstrap" style="background-color: transparent;">
              <li class="list-group-item text-white border-0 px-0" style="background-color: transparent;"><span class="la la-phone mr-5 fs-5"></span> <span class="text-sm">+234 803 581 3694</span></li>
              <li class="list-group-item text-white border-0 px-0" style="background-color: transparent;"><span class="la la-envelope mr-5 fs-5"></span> <span class="text-sm">info@pcig.com.ng</span></li>
              <li class="list-group-item text-white border-0 px-0" style="background-color: transparent;"><span class="la la-map-marked mr-5 fs-5"></span> <span class="text-sm">Corporate Headquarters Kilometer 6, Asaba Benin Expressway Opposite Federal Road Safety Commission Office, Beside National Population Commission. P.O Box 1537 Asaba, Delta State</span></li>
            
            </ul>

            <div class="container-fluid mt-5 px-0">
            <a href="" ><span class="la la-envelope text-white fs-5 mr-2"></span></a>
            <a href="" ><span class="la la-twitter text-white fs-5"></span></a>
            <a href="" ><span class="la la-facebook text-white fs-5"></span></a>
            <a href="" ><span class="la la-instagram text-white fs-5"></span></a>
            </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-6">
      <div class="card">
        <div class="card-body">
          
    <form method="GET" action="{{ route('send-email') }}" class="mt-3 py-3">
      @csrf
      <h6 class="text-dark mb-2">Your mail</h6>
      <div class="input-group flex-nowrap">
       <span class="input-group-text" id="addon-wrapping"><span class="la la-envelope"></span></span>
        <input type="email" class="form-control p-3" name="email" placeholder="example@mail.com" aria-label="Email" aria-describedby="inputGroup-sizing-lg" required>
      </div>
      <br>
      <div class="mb-3">
        <h6 class="text-dark mb-2">Your message</h6>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message" required></textarea>
      </div>
      <br>
      <input type="submit" class="btn bg-primary float-end" name="send-mail" value="Send message">
    
    </form>
        </div>
      </div>

    </div>
    
    </div>
 </div> 
<br><br>
</section>
<section class="container-fluid bg-white p-3">
  <br><br>
<div class="container my-2">
<h6 class="text-primary fw-bold m-0" style=""><strong>MEET OUR ORGANIZATIONAL BOARD</strong></h6>
<h1 class="text-dark fw-bold m-0"> <strong>Board members</strong></h1>
<hr class="container bg-primary"></hr>
</div>


<!--Board members-->
<div class="container">
 
  <!--<div id="carouselExampleControls" class="carousel my-lg-5 px-lg-5 px-lg-5 px-lg-5" data-bs-ride="carousel">
    <div class="carousel-inner">-->
      <div class="row px-lg-2">
      @foreach($board as $key => $member)
      @php
      $image = array_values(explode("~",$member))[0];
      $image = $image == 'none' ? 'default/user.jpg' : $image;
      $title = array_values(explode("~",$member))[2];
      $name = array_values(explode("~",$member))[1];
      @endphp
      <div class="col-lg-4 col-md-4 col-12 py-4">
        <!--<div class="carousel-item {{$key == 0 ? 'active' : '' }}">-->
            <div class="card h-100 w-100 bg-white shadow-lg p-0 mx-lg-1 rounded-3">
                <div class="img-wrapper bg-light rounded-top" style="justify-content: center;align-items: center;">
                  <img src="{{ asset('images/main/'.$image) }}" class="rounded-top img-fluid" width="100%" height="130px" alt="..."> 
                </div>
  
                <div class="card-body py-4">
                    <h6 class="card-title text-dark"><strong>{{ $title }}</strong></h6>
                    <span class="fs-6 text-secondary">
                      {{ $name }} 
                    </span>
                    <!--<a href="#" class="btn bg-primary pr-5"><span class="mr-2">learn more</span>
                      <span class="la la-arrow-right"></span></a>-->
                </div>
            </div>
          </div>
        <!--</div>-->
        @endforeach
      </div>
      <!-- 
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
  </div>
-->
  </div>
</section>
@endsection
