@extends('layouts.panel')

@section('content')

<div class="container p-1 mt-5">
  <div class="container-fluid rounded-2 p-5 mt-5 bg-primary">
    <!--<img src="{{ asset('images/main/about.jpg') }}" class="d-block w-100" height="250px" alt="..."> -->
    
    <div class="container">
    <h1 class="text-white text-center"><a href="/" class="text-white">Home</a>/Downloads
    @auth
    <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom"><span class="la la-plus fs-5"></span></button>
    @endauth  
    </h1>
        
    </div>
    </div> 
</div>

<!--list of pdfs-->
<aside class="container shadow-lg p-3 p-md-5 p-lg-5 my-5" style="border-radius:10px;">
  <div class="row bg-white">
    @foreach($pdfs as $pdf)
    <div class="col-12 col-md-6 col-lg-6 px-lg-4 mt-4">
      <div class="row" style="border:1px solid #d3d3d3;border-radius:10px;">
        <div class="col-2 p-2">
          <img src="{{ asset('images/default/pdf.png') }}" height="40px" width="40px" alt="..."> 
         </div>
         <div class="col-8 p-2">
          <h6 class="text-dark mb-1"><strong>{{ $pdf->pdf_name }}</strong></h6>
          <span class="text-secondary d-block" style="font-size: small;">
          Created at {{ \Carbon\Carbon::parse($pdf->created_at)->format('d/m/Y')}}
          </span>
          @auth
          <span>
            <a href="/downloads/delete/{{ $pdf->id }}" style="font-size: small;" class="text-danger">Delete</a> 
           </span>
           @endauth
        </div>
         <div class="col-2 p-2">
           <span>
             <a href="{{ asset('downloads/'.$pdf->pdf_doc)}}" class="btn bg-primary-alt py-1" style="border-radius: 15px;"><span class="text-white" style="font-size: small;">view</span></a>
           </span>
           
           
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

<!--add pdf button-->
@auth
<div class="offcanvas offcanvas-bottom h-50" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
  <div class="offcanvas-header py-2 bg-light shadow px-5">
    <h5 class="offcanvas-title text-dark" id="offcanvasBottomLabel"><strong>ADD PDF</strong></h5>
    <button type="button" class="bg-white" data-bs-dismiss="offcanvas" ><span class="la la-close text-dark fs-3"></span></button>
  </div>
  <div class="offcanvas-body px-5">
    <form method="POST" action="{{ route('downloads.add') }}" enctype="multipart/form-data" class="p-3 border rounded-2">
                @csrf
                
                <label class="font-weight-bold w3-medium"></label>Pdf</label>
                <br>
                <div class="custom-file">
                    <input type="file" name="pdf_file" class="custom-file-input" id="customFile" required>
                  </div>

                <br>
                <div class="form-group">
                    <label class="font-weight-bold w3-medium">Pdf Name</label>
                    <input type="pdf_name" name="pdf_name" class="form-control w-50" id="pwd" required>
                  </div>

         <br> 
        <button type="submit" class="btn bg-primary">Submit</button>
      </form>
  </div>
</div>
@endauth
@endsection