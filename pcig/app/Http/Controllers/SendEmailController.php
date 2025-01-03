<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\NotifyMail;

class SendEmailController extends Controller
{
    //


    public function index(Request $request){

        $email = 'pettersongroup3@gmail.com';

        $this->validate($request,[
            'email'=> 'required',
            'message'=> 'required',
        ]);

        $mailSendTo = $request->input('email');
        $mailBody = $request->input('message');
      
        $mailData = [
            'title'=> 'Message from '.$mailSendTo,
            'body'=> $mailBody,
        ]; 

        Mail::to($email)->send(new NotifyMail($mailData));

        if(Mail::failures()){
            return view('emails/error');
        }else{
            return view('emails/success');
        }
    }

   

    public function success(){
        return view('emails/success');
    }

    public function error(){
        return view('emails/error');
    }
}
