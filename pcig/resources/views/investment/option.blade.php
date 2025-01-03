@extends('layouts.panel')

@section('content')
<div class="container-fluid position-relative p-0">
<div class="item"></div>
<img src="{{ asset('images/main/about.jpg') }}" class="d-block w-100" height="300px" alt="..."> 

<div class="container position-absolute top-50 start-0">
<h1 class="text-white text-center display-4"><a href="/" class="text-white">Home</a>/{{ $investment->i_title }}
@auth 
<button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom"><span class="la la-plus fs-5"></span></button>
@endauth     
</h1>
</div>
</div> 

<div class="container mt-5">
<h2 class="text-black text-center"><strong>Partner with us today</strong></h2>
<p class="text-secondary text-center">
  Now You Can Partner with PCIG, Africa’s convergent hub for global enterprise engageing with 
  corresponding competence and capacity for international bench mark service delivery in energy,
   health care, agriculture, industries infrastructure, man power development, mining and Explorations
  , climate change, innovative technology, education and consultancy services
</p>
</div>


<!--pdfs and registration form-->
<aside class="container">
<div class="row">

<div class="col-12 col-md-6 col-lg-12 p-4">
    <!--registration form-->
<div class="container shadow-lg p-5" style="border-radius:10px;">
    <h2 class="text-black mb-4 fw-bolder text-center">Registration</h2>
    
    <form action="{{ route('registration.register') }}" method="POST" class="row g-4">
      @csrf

      <input type="hidden" name="investment_id" value="{{ $investment->id }}">
        <div class="col-12 input-group">
            <input type="text" class="form-control bg-light" style="padding: 15px;" id="companyName" name="companyName" placeholder="Company Name" required>
        </div>
        <div class="col-md-6">
          
          <input type="text" name="firstName" class="form-control bg-light" style="padding: 15px;" id="firstName" placeholder="Firstname" required>
        </div>
        <div class="col-md-6">
        
        <input type="text" class="form-control bg-light" style="padding: 15px;" id="lastName" name="lastName" placeholder="Lastname" required>
        </div>
        <div class="col-md-6">
        <input type="email" class="form-control bg-light" style="padding: 15px;" id="email" name="email" placeholder="Email" required>
        </div>
        <div class="col-md-6">
           
         <input type="tel" class="form-control bg-light" style="padding: 15px;" id="phone" name="phone" placeholder="Phone" required>
        </div>
        <div class="col-md-12 input-group">
        <input type="text" class="form-control bg-light" style="padding: 15px;" id="address" name="address" placeholder="Address" required>
        </div>

        <div class="d-flex">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="category" id="inlineRadio1" value="MSMEs" checked>
            <label class="form-check-label" for="inlineRadio1">MSMEs</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="category" id="inlineRadio2" value="Trade Groups">
            <label class="form-check-label" for="inlineRadio2">Trade Groups</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="category" id="inlineRadio3" value="Sovereign Nation">
            <label class="form-check-label" for="inlineRadio3">Sovereign Nation</label>
          </div>
        </div>
        
        
        <div class="col-12">
          <button type="submit" class="btn bg-primary">Register</button>
        </div>
      </form>
</div>
</div>


<div class="col-12 col-md-6 col-lg-12 p-4">
  <!--list of pdfs-->
  <aside class="container py-4" style="border-radius:10px;min-height: 400px;background-color: #f3f3f3;">
      <h2 class="text-black fw-bolder">Documents</h2>
      <div class="row">
        @foreach($pdfs as $pdf)
        <div class="col-6 px-lg-4 mt-3">
          <div class="row bg-white" style="border-radius:10px;">
            <div class="col-2 p-2">
              <img src="{{ asset('images/default/pdf.png') }}" height="40px" width="40px" alt="..."> 
             </div>
             <div class="col-8 p-2">
              <h6 class="text-dark mb-1"><strong>{{ $pdf->pdf_name }}</strong></h6>
              <span class="text-secondary d-block" style="font-size: small;"> Created at {{ \Carbon\Carbon::parse($pdf->created_at)->format('d/m/Y H:m:a')}}</span>
              @auth
              <span>
                <a href="/downloads/delete/{{ $pdf->id }}" style="font-size: small;" class="text-danger">Delete</a> 
               </span> 
               @endauth
            </div>
             <div class="col-2 p-2">
              <a href="{{ asset('downloads/'.$pdf->pdf_doc)}}" class="btn bg-primary-alt py-1" style="border-radius: 15px;"><span class="text-white" style="font-size: small;">view</span></a>
             </div>
          </div>
          </div>
        
        <br>
        @endforeach
      </div>
    
        <!--Paginate links-->
    <div class="mt-5 d-flex justify-content-center py-0">
      {!! $pdfs->links() !!}
    </div>
    </aside>
  </div>
  <!--end of pdfs-->
</div>


</aside>

<!--add pdf to investment option-->
@auth
<div class="offcanvas offcanvas-bottom h-50" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
    <div class="offcanvas-header py-2 bg-light shadow px-5">
      <h5 class="offcanvas-title text-dark" id="offcanvasBottomLabel"><strong>ADD PDF</strong></h5>
      <button type="button" class="bg-white" data-bs-dismiss="offcanvas" ><span class="la la-close text-dark fs-3"></span></button>
    </div>
    <div class="offcanvas-body px-5">
        <div class="container w-50">
            <form method="POST" action="{{ route('investment.add') }}" class="p-3 border rounded-2">
                @csrf
                 <input type="hidden" name="investment_id" value="{{ $investment->id }}">
                <span>List of pdfs</span>
                <select class="form-select" aria-label="Default select example" name="pdf_id">
                  @foreach($allPdfs as $pdf)
                  <option value="{{ $pdf->id }}">{{$pdf->pdf_name}}</option>
                  @endforeach
                </select>

         <br> 
        <button type="submit" class="btn bg-primary">Submit</button>
      </form>
        </div>
      
    </div>
  </div>
  @endauth
@endsection