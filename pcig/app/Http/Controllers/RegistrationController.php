<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use Mail;
use App\Mail\NotifyMail;

class RegistrationController extends Controller
{

    public function register(Request $request){
        $this->validate($request,[
        'companyName'=>'required',
        'firstName'=>'required',
        'lastName'=>'required',
        'phone'=>'required',
        'email'=>'required',
        'address'=>'required',
        'category'=>'required',
        ]);

        $email = 'pettersongroup3@gmail.com';

        $checkReg = Registration::where('email','=',$request->input('email'));


        if($checkReg->exists()){
            return redirect()->route('investment.show',$request->input('investment_id'))
            ->with('error', 'No Duplicate registration allowed');


        }else{

            $registration = new Registration;
            $registration->companyName = $request->input('companyName');
            $registration->firstName = $request->input('firstName');
            $registration->lastName = $request->input('lastName');
            $registration->phone = $request->input('phone');
            $registration->email = $request->input('email');
            $registration->address = $request->input('address');
            $registration->category = $request->input('category');

            $mailBody = 'COMPANY NAME : '.$request->input('companyName') .
                         'NAME : '.$request->input('firstName') . $request->input('lastName') .
                          'PHONE : '.$request->input('phone') .
                          'ADDRESS : '. $request->input('address') .
                          'CATEGORY : '.$request->input('category');

            $mailData = [
                'title'=> 'Message from '.$request->input('email'),
                'body'=> $mailBody,
            ]; 

            if($registration->save()){

            Mail::to($email)->send(new NotifyMail($mailData));

            return redirect()->route('investment.show',$request->input('investment_id'))
                             ->with('success', 'Regisration successfull');
            }
        }
        
    }
}
