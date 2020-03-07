<?php


namespace App\Http\Controllers;

use App\Product;
use \Illuminate\Http\Request;


class WebController extends Controller

{

    public function home(){
        $newests = Product::orderBy('created_at','desc')->take(10)->get();
        $cheaps = Product::orderBy("price",'asc')->take(10)->get();
        $exs = Product::orderBy('price','desc')->take(10)->get();
        return view('index',['newests'=>$newests,'cheaps'=>$cheaps,'exs'=>$exs]);
    }
    public function product(){
        return view('product');
    }
    public function productDetail(){
        return view('productDetail');
    }

}


