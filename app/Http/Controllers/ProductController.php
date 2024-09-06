<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function baby(){
        return view('product.baby-kid');
    }
    public function beauty(){
        return view('product.beauty-health');
    }
    public function food(){
        return view('product.food-beverage');
    }
    public function home(){
        return view('product.home-care');
    }
}
