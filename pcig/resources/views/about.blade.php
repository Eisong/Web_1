@extends('layouts.panel')

@section('content')
<div class="container-fluid position-relative p-0">
<div class="item"></div>
<img src="{{ asset('images/main/about.jpg') }}" class="d-block w-100" height="250px" alt="..."> 

<div class="container position-absolute top-50 start-0">
<h1 class="text-white text-center display-4"><a href="/" class="text-white">Home</a>/About Us</h1>
</div>
</div> 
<!--History-->
<aside class="container pt-5 pb-3">
<h2 class="text-primary"><strong>Our History</strong></h2>
<p class="text-secondary">
    The rich journey of PCIG as one of Nigeria's leading business group humbly began with the registration of Petterson Clor International Ltd as a single indigenous company. The company was incorporated on the 31st of July 1990 as a private limited liability company with CAC registration number RC 152661. Highly leveraging on the prestigious professional and entrepreneurial pedigree of its founding chairman and CEO Dr. Peter Dongo Isibor the company began business operations that same year.
</p>
<p class="text-secondary">
    Through the visionary and insightful leadership of the company's progenitor, Dr Isibor the company grew in leaps and bounds in the company's initial core areas of engagement namely, medical procurement and Healthcare Turnkey project design and management. Within 15 years of coming into existence the company had gained enough liquidity to further diversify its operations into other sectors like energy and manpower development to explore and exploit emerging opportunities.
</p>
<p class="text-secondary">
    Since its humble beginning 23 years ago the company has evolved into a leading proudly Nigerian business conglomerate with diverse interests in energy, healthcare, agriculture, infrastructure, manpower and development initiatives(i.e. Public Private Partnership 'PPP' initiatives).
</p>
</aside>

<!--Vision-->
<aside class="container py-3">
    <h2 class="text-primary"><strong>Our Vision</strong></h2>
    <p class="text-secondary">
        Become Nigeria's premiere global Business Group with an international repute par excellence for
         corporate governance, service delivery and value in our areas of expertise.
        </p>
</aside>
   
<!--Mission-->
<aside class="container py-3">
    <h2 class="text-primary"><strong>Our Mission</strong></h2>
    <p class="text-secondary">
        To become Africa’s convergent hub for global enterprise engagement with corresponding 
        competencies and capacity for internationally benchmarked service delivery in healthcare, 
        Energy, infrastructure provision, transportation and manpower development.
        </p>
</aside>

@endsection