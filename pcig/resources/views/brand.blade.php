@extends('layouts.panel')

@section('content')
<div class="container-fluid position-relative p-0">
<div class="item"></div>
<img src="{{ asset('images/main/about.jpg') }}" class="d-block w-100" height="250px" alt="..."> 

<div class="container position-absolute top-50 start-0">
<h1 class="text-white text-center display-4"><a href="/" class="text-white">Home</a>/Subsidiary</h1>
</div>
</div>

<!--Details-->
<aside class="container p-4 p-md-5">                  
<div class="container">
@php 
   echo $brand->b_detail 
@endphp  
</div>
</aside>

@endsection