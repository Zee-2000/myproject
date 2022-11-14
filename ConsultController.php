<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consult;
use App\Models\Category;
use App\Models\Vet;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Const_;

class Consultcontroller extends Controller

{
   public function index()
   {
      $consult_data=Consult::all();
      $categories = Category :: all();
      return view("vets",compact("['consult_data','categories']"));
   }

   public function vet_consult(Request $request)
   {
      dd($request);
      $consult_data=$request["vet_id"];
      $categories = Category :: all();
      return view("bookingsent",compact('consult_data','categories'));
   }

    public function book(Request $request)
    {
      dd($request);
      $vet_id=$request["vet_id"];
      $categories = Category :: all();
      return view("bookingsent",compact("['vet_id','categories']")) ;
    }
    public function store(Request $request){
       //dd($request);
        Consult::create(['petCategory'=>$request["petCategory"],
       'pet_case'=>$request["pet_case"],
       'vet_id'=>$request["vet_id"],
       'user_id'=>$request["user_id"]]);
       $categories = Category :: all();
       return view("clinic",compact('categories'));
       
    
      
    }
    public function update(Request $request, Consult $consult_data)
    {
      dd($request);
       $consult_data->update($request->all());
       return back();
    }

    public function geconsults(Request $request)
    {
      dd($request);
      $categories = Category :: all();
      return view("bookingsent",compact("consults")) ;
    }
}