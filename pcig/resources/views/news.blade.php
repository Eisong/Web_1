@extends('layouts.panel')

@section('content')
<div class="container-fluid position-relative p-0">
<div class="item"></div>
<img src="{{ asset('images/main/about.jpg') }}" class="d-block w-100" height="250px" alt="..."> 

<div class="container position-absolute top-50 start-0">
<h1 class="text-white text-center display-4"><a href="/" class="text-white">Home</a>/News</h1>
</div>
</div> 
<!--Contact-->
<aside class="container-fluid m-0">
<div class="container p-3 shadow my-4" style="border-radius: 5px;">
       <h5 class="text-primary mt-4"><strong>PETTERSON CLOR INTERNATIONAL GROUP</strong></h5>
       <p class="text-secondary">
        PCIG is Nigeria's foremost wholly indigenous business group and a major player in the Nigerian, sub-regional, continental and global markets. The group is comprised of 5 independent divisions, with each division consisting of strategically aligned subsidiaries.
         Each subsidiary is proudly a trail blazing industry leader within its market sector.
        </p>
</div>

<div class="container p-3 shadow my-4" style="border-radius: 5px;">
    <h5 class="text-primary mt-4"><strong>PETTERSON CLOR INTERNATIONAL GROUP</strong></h5>
    <p class="text-secondary">
        PCIG is fully committed to Nigeria's nation building efforts and quest for continental economic dominance. The Group in line with this resolve has invested and continues to invest strategically in the Nigerian economy, and is a driving force in the following key sectors:
    </p>
</div>

</aside>


@endsection