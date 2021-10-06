<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Models\product;
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

Route::get('/', [\App\Http\Controllers\MainController::class,"index"]);
Route::get('Home', [\App\Http\Controllers\MainController::class,"index"]);
Route::get('menu', function () {
    return view('menu');
});
Route::get('aboutus', [\App\Http\Controllers\MainController::class,"aboutUs"]);
Route::get('aboutme', [\App\Http\Controllers\MainController::class,"aboutUs2"]);
Route::get('shop', function () {
    return view('shop');
});
Route::get('shop_details', [\App\Http\Controllers\MainController::class,"shop_details"]);
Route::get('menu', [\App\Http\Controllers\MainController::class,"menu"]);
Route::get('cart', [\App\Http\Controllers\MainController::class,"cart"]);
Route::get('checkout', [\App\Http\Controllers\CheckoutController::class,'checkout']);
Route::get('contact', [\App\Http\Controllers\MainController::class,'contact']);
Route::get('login', function () {
    return view('login');
});
Route::get('signup', function () {
    return view('signup');
});
Route::get('dashboard', function () {
    return view('loginuser_dashboard.dashboard');
});
Route::get('logout', function () {
    if(session()->has('user')){
        session()->pull('user');
    }
    return redirect('Home');
});
Route::get('admin', function () {
    return view('admin.admin_login');
});

Route::get('admin_dashboard', function () {
    return view('admin.dashboard');
});
Route::get('admin_logout', function () {
    if(session()->has('adminuser')){
        session()->pull('adminuser');
    }
    return redirect('admin');
});
Route::get('product', function () {
    return view('admin.products');
});
Route::get('addproduct', function () {
    return view('admin.addproduct');
});
Route::get('addproductcategory', function () {
    return view('admin.addproductcategory');
});
Route::get('showproductcategory', function () {
    return view('admin.showproductcategory');
});
Route::get('adminregister', function () {
    return view('admin.admin_register');
});

Route::post('/signup',[registerController::class, 'store'])->name('signup');
Route::post('/login',[registerController::class, 'user_login'])->name('login');
Route::post('/adminlogin',[AdminController::class, 'admin_login'])->name('adminlogin');
Route::post('/addproductcategory',[AdminController::class, 'addproductcategory'])->name('addproductcategory');
Route::get('/showproductcategory',[ AdminController::class, 'ShowProductCatergory']);
Route::get('/addproduct',[ AdminController::class, 'ShowProductCategory_dropdown']);
Route::post('/addproduct',[AdminController::class, 'addproduct'])->name('addproduct');
// Route::post('/addproduct',[AdminController::class, 'addproduct']);
Route::post('/adminregister',[AdminController::class, 'adminregister'])->name('adminregister');
Route::post("contact",[ContactController::class,'submitContact'])->name('contact');

Route::post('add/cart',[\App\Http\Controllers\CartController::class,"addToCart"])->name("add.to.cart");
Route::post('remove/cart',[\App\Http\Controllers\CartController::class,"removeFromCart"])->name("remove.from.cart");







