<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\VetAuthController;
use App\Http\Controllers\ClinicController;
use App\Http\Controllers\webController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ConsultController;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('home',[ShopController::class, 'index']);
// Route::get('cart',[ShopController::class, 'cart']);
Route::get('category',[ShopController::class, 'category']);
Route::get('log_in',[ShopController::class, 'log_in']);
Route::get('product',[ProductController::class, 'product']);
Route::get('Registeration_form',[ShopController::class, 'Registeration']);
Route::get('clinic',[ShopController::class, 'clinic']);
Route::get('vets',[ShopController::class, 'vets']);
Route::get('log in',[ShopController::class, 'log in']);
Route::get('about',[ShopController::class, 'about']);
Route::get('vetlogin',[ShopController::class, 'vetlogin']);





Route::get('users/{id}/delete',function($id){
    echo "in user $id";
});


 Route::get("Registrationform",[UserController::class,"create"]);
// -----------------------------------------
Route::post("store",[UserController::class,"store"])->name("store");
Route::post("store",[VetAuthController::class,"store"])->name("storeVet");
Route::get("vetlogout",[VetAuthController::class,"logout"]);
// ---------------------------
Route::get("logout",function(){
    auth()->logout();
    return redirect("home");
});
// Route::get("login",function(){
//     // auth()->login();

//     return view("product");
// });
// Route:: view("products","product");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/showcatgory/{id}', [App\Http\Controllers\HomeController::class, 'showcatgory'])->name('showcatgory');
Route::view('vet',"auth.vet")

Route :: resource("cart",CartController::class);
Route :: resource("order",OrderController::class);

Route::get('checkout', function(){
    $categories=Category:: all();
    return view("Checkout",compact("categories"));
})->name('checkout');



Route ::get("addorder",[OrderController::class,"create"]);

Route ::get("order",[OrderController::class,"index"])->name("order");

Route ::get("deletecart/{id}",[OrderController::class,"delete"])->name("deletecart");

Route ::get("c",function(){
    $data = auth()->user()->cart;
    return view("cart",compact("data"));
});
Route ::get("store",function(){
    $data = auth()->user()->vet;
    return view("clinic",compact("data", "categories"));
});

Route::view('vet',"auth.vet");
//--------------------------------------------------------------------
Route::post('store', [ClinicController::class, 'getVet'])->name('getVet');
Route::get('vet/', [VetAuthController::class, 'index'])
    ->name('vet.register');
Route::get('vet/login', [VetAuthController::class, 'login'])
    ->name('vet.login');
Route::post('vet/login', [VetAuthController::class, 'handleLogin'])
    ->name('vet.handleLogin');
Route::get('vet/logout', [VetAuthController::class, 'index'])
    ->name('vet.logout');
 Route::get('vet/', [VetAuthController::class, 'index'])
    ->name('vet.home')
    ->middleware('auth:webVet');
    // Route::get('/', [RegisterController::class, 'index'])
    // ->name('user.home')
    // ->middleware('auth:web');
Route::resource("consult", Consultcontroller::class);
Route::post('clinic',[Consultcontroller::class,'vet_consult'])->name("vet_consult");
 Route::post('consult',[Consultcontroller::class,'book'])->name("consult");
 Route::post('book',[Consultcontroller::class,'store'])->name("storeconsult");

 Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');

 Route::get('/about', [App\Http\Controllers\ShopController::class, 'aboutus']);

 Route::post('/filter/{category}', [App\Http\Controllers\ProductController::class, 'filter'])->name('filter');

 Route::get('vetprofile',[ShopController::class, 'showprofile'])->name('vetprofile');