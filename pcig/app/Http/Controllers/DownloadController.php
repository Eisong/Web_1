<?php

namespace App\Http\Controllers;

use File;
use Illuminate\Http\Request;
use App\Models\Pdf;
use App\Models\InvestmentPdf;

class DownloadController extends Controller
{
    //


    public function index(){

       $pdfs = Pdf::paginate(8);
       return view('downloads/all', ['pdfs' => $pdfs]);
    }

    public function delete($id){

        $pdf = Pdf::find($id);
        $foreignRel = InvestmentPdf::where('pdf_id','=',$id);

        if($pdf->exists() || $foreignRel->count() > 0){
            $pdf->delete();
            $foreignRel->delete();
            return redirect()->route('downloads.show')->with('success', 'PDF Document deleted Successfully!');
        }else{
            return redirect()->route('downloads.show')->with('error', 'No Pdfs found');   
        }

    }

    public function addPdf(Request $request){

     $this->validate($request,[
      'pdf_name'=>'required',
      'pdf_file'=>'required',
     ]);  

    $fileNameToStore = "";

     if($request->hasFile('pdf_file')){

        $pdf_file = $request->file('pdf_file');

        $filenameWithExt = $request->file('pdf_file')->getClientOriginalName();

        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        $extension = $request->file('pdf_file')->getClientOriginalExtension();

        $fileNameToStore = $filename .'_'.time().'.'.$extension;

        $destinationPath = public_path('downloads/');
        $pdf_file->move($destinationPath, $fileNameToStore);
    

    }else{
        $fileNameToStore = 'noimage.png';
    }

     $pdf = new Pdf;
     $pdf->pdf_name = $request->input('pdf_name');
     $pdf->pdf_doc = $fileNameToStore;
     $pdf->pdf_image = "";

     if($pdf->save())
     return redirect()->route('downloads.show')->with('success', 'PDF Document added Successfully!');

    }
}
