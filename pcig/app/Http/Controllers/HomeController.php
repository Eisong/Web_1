<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InvestmentOption;

class HomeController extends Controller
{
    //

    public function index(){
        $mainData = array(
            "agric.jpg~AGRICULTURE~The potential that lies in agriculture if optimally harnessed can guarantee food security and economic prosperity for Nigeria and Africa’s teeming populace",
            "manpower.jpg~MANPOWER~Africa’s richest resource remains its people and we aim to maximize the contribution of this resource to the future of this great continent.",
            "pride.jpg~PRIDE~We are Nigeria’s most dynamic business group, We take pride in a strong record of achievement... and the capacity to deliver is our trademark",
            "inf.jpg~INFRASTRUCTURE~Industrialization is Nigeria and Africa’s hope for greatness, we want to be a part of the continent’s industrialization success story.",
            "health2.jpg~HEALTH CARE~We began in healthcare, our participation in this key sector has helped our group build its global character, sense of commitment and integrity.",
            "energy.jpg~ENERGY~We are extremely determined to power our nation’s economic development drive through the provision of innovative energy solutions.");


        $board = array(
                  "isibor.jpg~Ambassador Dr. Peter Isibor~Chief Executive Officer",
                  "wife.jpeg~Mrs. Siema Isibor Thompson~Director",
                  "daughter.jpeg~Mrs Faith Abude~Director"
                  );     
        
        $logos = array("pdf.png","opsiaasez.png","ccf.png","clsm.png","nijwcl.png","pcesl.png",
                       "pcig.png","pcis.png","pcpl.png","pdfl.png");
        
        $investments = InvestmentOption::all(); 

        return view('welcome', ['mainData'=> $mainData, 'investments' => $investments,
                               'board' => $board, 'logos' => $logos]);
    }
    
    
    public function news(){
        return view('news');
    }

    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function terms(){
        return view('terms');
    }
    public function privacy(){
        return view('privacy');
    }
    public function disclaimer(){
        return view('disclaimer');
    }

}

