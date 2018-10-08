<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Page extends Controller
{
    function index(){
        return view('index');
    } 
    function product_summary(){
        return view('product_summary');
    }
    function products(){
        return view('products');
    }
    function product_detail(){
        return view('product_details');
    }   
}
