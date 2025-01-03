@extends('layouts.panel')

@section('content')
<div class="container-fluid position-relative p-0">
<div class="item"></div>
<img src="{{ asset('images/main/about.jpg') }}" class="d-block w-100" height="250px" alt="..."> 

<div class="container position-absolute top-50 start-0">
<h1 class="text-white text-center display-4"><a href="/" class="text-white">Home</a>/Privacy</h1>
</div>
</div> 
<!--History-->
<aside class="container pt-5 pb-3">
<h2 class="text-primary"><strong>Privacy policy</strong></h2>
<p class="text-secondary">
PCIG respects your privacy and does not sell, rent or loan any identifiable information collected on this site. Any information that you give will be treated in careful 
and secure manner and will not be used in ways to which you have not consented.   
</p>
<p class="text-secondary">
Our web site may contain links to other web sites. Please be aware that we are not responsible for the
 privacy practices of web sites not operated by us or an entity in the PCIG. We encourage you to read the privacy statements of each and every web site that collects personally identifiable information.
</p>
<p class="text-secondary">
If you have any questions, please contact:

<strong>webmaster@pcig.com.ng</strong>
</p>
</aside>

@endsection