<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InvestmentOption;
use App\Models\Pdf;
use App\Models\InvestmentPdf;

class InvestmentController extends Controller
{
    //

    public function showOne($id){
        
        $investment = InvestmentOption::findorfail($id);

        $pdfs = Pdf::Join('investment_pdfs','pdfs.id','=','investment_pdfs.pdf_id')
                    ->join('investment_options','investment_options.id','=','investment_pdfs.investment_id')
                    ->where('investment_options.id','=',$id)
                    ->paginate(4);

        $allPdfs = Pdf::all();            

        return view('investment/option',['investment'=>$investment, 'pdfs'=>$pdfs, 'allPdfs'=>$allPdfs]);
    }

    public function addPdf(Request $request){
        $this->validate($request,[
            'investment_id'=>'required',
            'pdf_id'=>'required',
            ]);

            $checkRecords = InvestmentPdf::where('investment_id','=',$request->input('investment_id'))
                                ->where('pdf_id','=',$request->input('pdf_id'))->get();

            if($checkRecords->count()==0){

                $pdfInvestment = new InvestmentPdf;
                $pdfInvestment->investment_id = $request->input('investment_id');
                $pdfInvestment->pdf_id = $request->input('pdf_id');
    
                if($pdfInvestment->save())
                return redirect()->route('investment.show',$request->input('investment_id'))->with('success', 'Added Successfully');;
    
            } else{
                 return redirect()->route('investment.show',$request->input('investment_id'))
                                   ->with('error', 'No Duplicates allowed');
    
            }                    
          
    }
}
