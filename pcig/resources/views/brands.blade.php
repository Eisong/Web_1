@extends('layouts.panel')

@section('content')
<div class="container-fluid position-relative p-0">
    <div class="item"></div>
    <img src="{{ asset('images/main/about.jpg') }}" class="d-block w-100" height="245px" alt="..."> 
    
    <div class="container position-absolute top-50 start-0">
    <h1 class="text-white text-center"><a href="/" class="text-white">Home</a>/Subsidiaries</h1>
    </div>
</div> 

<aside class="container p-5">
    <div class="row justify-content-center">
        @foreach($brands as $brand)
        <div class="col-12 col-md-3 col-lg-3 p-1 p-lg-4 p-md-2 mb-4 mb-md-2 d-block">
            <a href="/brand/{{$brand->id}}">
                <div class="container-fluid p-0 border rounded-1 shadow rounded-2">
                    <div class="container bg-white py-3" style="height: 145px;">
                        <center>
                            <img src="{{ $brand->b_logo == '' ? asset('images/default/brand.png') : asset('images/logos/'.$brand->b_logo) }}" class="img-fluid rounded-top" width="60%">
                       
                        </center>         
                    </div>
                     <div class="container-fluid py-2 bg-light rounded-bottom">
                        <h6 class="text-dark text-center"><strong>{{ $brand->b_name}}</strong></h6>
                        <h6 class="fs-6 text-center text-secondary text-capitalize">{{ $brand->category }}</h6>
                   
                     </div>
                   </div>
            </a>  
        </div>
        @endforeach

    </div>

</aside>

@endsection