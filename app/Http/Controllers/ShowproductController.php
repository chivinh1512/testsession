<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ShowproductController extends Controller
{
    public function show(){
        $data = Product::all();
        return view('showproduct',compact('data'));
    }
}
