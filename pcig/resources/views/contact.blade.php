@extends('layouts.panel')

@section('content')
<div class="container-fluid position-relative p-0">
<div class="item"></div>
<img src="{{ asset('images/main/about.jpg') }}" class="d-block w-100" height="250px" alt="..."> 

<div class="container position-absolute top-50 start-0">
<h1 class="text-white text-center display-4"><a href="/" class="text-white">Home</a>/Contact Us</h1>
</div>
</div> 
<!--Contact-->
<aside class="container">
<div class="container px-5">
       <h2 class="text-primary mt-4"><strong>Contact us</strong></h2>
       <p class="text-secondary">
        Corporate Headquarters Kilometer 6, Asaba Benin Expressway Opposite Federal Road Safety 
        Commission Office, Beside National Population Commission. P.O Box 1537 Asaba, Delta State. 
        </p>
        <ul class="text-secondary">
            
            <li><span class="la la-phone mr-3"></span>234 - 8035813694</li>
            <li><span class="la la-envlope mr-3"></span>info@pcig.com.ng</li>
        </ul>
</div>

</aside>


@endsection