<?php


namespace App\Http\Controllers;

use App\Product;
use \Illuminate\Http\Request;


class WebController extends Controller

{

    public function home(){
        $h1 = Product::orderBy('product_name')->take(3)->get();
        $h2 = Product::orderBy("product_desc")->take(3)->get();
        $h3 = Product::orderBy('gallery','desc')->take(5)->get();

        return view('index',['h1'=>$h1,'h2'=>$h2,'h3'=>$h3]);
    }
    public function product(){
        return view('product');
    }
    public function productDetail(){
        return view('productDetail');
    }

}


