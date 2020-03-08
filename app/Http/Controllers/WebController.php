<?php


namespace App\Http\Controllers;

use App\Product;
use \Illuminate\Http\Request;


class WebController extends Controller

{

    public function home(){
        $h1 = Product::orderBy('created_at','desc')->take(3)->get();
        $h2 = Product::orderBy('created_at','asc')->take(6)->get();
        $h3 = Product::orderBy('created_at')->take(2)->get();

        return view('index',['h1'=>$h1,'h2'=>$h2,'h3'=>$h3]);
    }
    public function product(){
        return view('product');
    }
    public function productDetail(){
        return view('productDetail');
    }

}


