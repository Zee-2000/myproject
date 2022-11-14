<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Vet;
use App\Models\Category;
use App\Models\Consult;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class VetAuthController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function getVet()
    {
        
        $data=Vet::all();
        $categories = Category :: all();
        return view("clinic",compact(['data', 'categories']));
    }

    public function store(Request $request)
    {
        dd($request);
        $request->image->storeAs("public/imgs",$request->image->getClientOriginalName());
        $imgname = $request->image->getClientOriginalName();

       $vet= Vet::create(['name'=>$request["name"],
       'country'=>$request["country"],
       'city'=>$request["city"],
       'street'=>$request["street"],
       'email'=>$request["email"],
       'password' => Hash::make($request['password']),
       'nationalid'=>Hash::make($request["nationalid"]),
       'medical_license'=>Hash::make($request["medical_license"]),
       'image'=>$imgname,
       'phonenumber'=>$request["phonenumber"]]
       


    );
$request->session()->put('user', $vet);
       //return redirect("allusers");
       return redirect('vet/login');
    }







    public function login()
    {
        $categories = Category :: all();
        return view('vetlogin',compact('categories'));
    }

    public function handleLogin(Request $req)
    {
        $categories = Category :: all();
        $vet=Vet::where("email",$req["email"])->first();
        //($vet);
        //$vet= Vet::where("password",Hash::check($req["password"], $vet["password"]))->first();
        $req->session()->put('user', $vet);
        $consults=$vet->consult;
    //logout
    //Session::forget('user');
       //dd(Auth::user());
        // if(Auth::guard('webVet')
        //        ->attempt($req->only(['email', 'password'])))
        // {
            return view('vets',compact(['consults', 'categories']));
        // }

        // return redirect()
        //     ->back()
        //     ->with('error', 'Invalid Credentials');
    }

    public function logout()
    {
        Session::forget('user');
        return redirect()
            ->route('vet.login');
    }
    protected function redirectTo($request)
{
    if (! $request->expectsJson()) {
        if ($request->routeIs('admin.*')) {
            return route('admin.login');
        }

        return route('user.login');
    }
}
}