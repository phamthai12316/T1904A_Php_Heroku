<?php


namespace App\Http\Controllers;

use \Illuminate\Http\Request;


class WebController extends Controller

{
    public function home(){
        return view('resources/views/index');
    }
    public function product(){
        return view('resources/views/product');
    }
    public function productDetail(){
        return view('resources/views/productDetail');
    }
}


