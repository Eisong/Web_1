@extends('layouts.panel')

@section('content')
<div class="container-fluid position-relative p-0 mt-5">
<div class="item"></div>
<img src="{{ asset('images/main/about.jpg') }}" class="d-block w-100" height="250px" alt="..."> 

<div class="container position-absolute top-50 start-0">
<h1 class="text-white text-center display-4"><a href="/" class="text-white">Home</a>/Disclaimer</h1>
</div>
</div> 
<!--History-->
<aside class="container pt-5 pb-3">
<h2 class="text-primary"><strong>Disclaimer notice</strong></h2>
<p class="text-secondary">
PCIG respects your privacy and does not sell, rent or loan any identifiable information collected on this site. Any information that you give will be treated in careful 
and secure manner and will not be used in ways to which you have not consented.   
</p>
<p class="text-secondary">
PCIG gives no warranty or representation that is accurate, current or complete. Please contact relevant section of the Group for more information. The information contained in this web site is provided for general purposes only. PCIG is not responsible for inaccuracies, falsehoods, or any other types of misinformation this web site may contain and will not be liable for any loss or damage suffered by a visitor through the visitor's reliance on the information gained here. PCIG logo is a registered trade mark of PCIG.
</p>
<p class="text-secondary">
Specific Information contained in this website where indicated is confidential and intended for view only. Any dissemination, distribution, copying or use of this communication without prior permission from owner is strictly prohibited. Any information, statements or options contained in this website (including any attachments) are given with rights and privileges from the owner.
</p>
</aside>

@endsection