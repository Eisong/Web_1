<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    //

    public function show(){
        
        $brands = Brand::all();

        return view('brands',['brands' => $brands]);
    }

    public function showOne($id){
        
        $brand = Brand::findorfail($id);

        return view('brand',['brand' => $brand]);
    }
}
