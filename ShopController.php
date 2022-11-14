<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vet;
use App\Models\Category;

class ShopController extends Controller
{
    public function index(){
        return view('index');
    }

    public function cart(){
        return view('cart');
    }

    public function category(){
        return view('Category2');
    }

    public function log_in(){
        return view('log_in');
    }

    // public function product(){
    //     return view('product');
    // }

    public function Registeration(){
        return view('Registration form');
    }

    public function clinic(){
   
        $data=Vet::all();
        $categories=Category::all();
        return view("clinic",compact("data","categories"));
    }

    public function vets(){
        $categories=Category::all();
        return view('sign up',compact("categories"));
    }
    
    public function showprofile()
    {
       $categories=Category::all();
       return view('vets',compact("categories"));
    }

    public function aboutus()
    {
        $categories=Category::all();
        return view('about',compact("categories"));
    }
    
    public function vetlogin(){
        $categories=Category::all();
        return view('vetlogin',compact("categories"));
    }
}
