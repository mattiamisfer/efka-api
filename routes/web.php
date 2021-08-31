<?php

use App\Http\Controllers\backend\ApproveController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\LoginControler;
use App\Http\Controllers\backend\MainUserController;
use App\Http\Controllers\backend\ProductControler;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\seller\VendorProductController;
use App\Models\Category;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->name('dashboard');


Route::get('/',[HomeController::class,'index'] );
Route::get('lang/{locale}', [LocalizationController::class,'lang']);

Route::get('/greeting/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'ar'])) {
        abort(400);
    }

    App::setLocale($locale);
    echo __('register.welcome');
    //
});


 Route::post('/store',[HomeController::class,'store'])->name('main.first');
 Route::get('/add',[HomeController::class,'add']);
 Route::get('/basic-info/{id}',[HomeController::class,'basic_info']);
 Route::post('/basic-store',[HomeController::class,'basic_store'])->name('main.basic');
 Route::get('/list/{lang}',[HomeController::class,'list'] );

 Route::get('/account-details/{id}',[HomeController::class,'account_details']);
 Route::post('/account-store',[HomeController::class,'account_store'])->name('main.account');
 Route::get('/cr-details/{id}',[HomeController::class,'cr_details']);
 Route::post('/cr-details',[HomeController::class,'cr_store'])->name('main.store');

 Route::get('/terms-and-conditions',[HomeController::class,'terms'])->name('setting.one');
 Route::get('/privacy-policy',[HomeController::class,'privacy'])->name('setting.two');

 Route::middleware(['middleware'=>'PreventBackHistory'])->group(function () {
    Auth::routes();
});






 Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth','PreventBackHistory']], function(){
    Route::resource('dashboard', DashboardController::class, ['as' => 'dashboard']);
    // Route::resource('login', LoginControler::class);
    Route::resource('product', ProductControler::class);
    Route::resource('category', CategoryController::class);
    Route::resource('user', MainUserController::class,['as' => 'user']);
    Route::get('/logout',[LoginControler::class,'logout'])->name('admin.logout');
    Route::post('/status-update/{id}',[ApproveController::class,'approve'])->name('status.update');
   
});

Route::group(['prefix'=>'vendor', 'middleware'=>['isVendor','auth','PreventBackHistory']], function(){
   // Route::resource('category', CategoryController::class,['as' => 'category']);
   Route::resource('product', VendorProductController::class,['as' => 'product']);
 Route::get('/logout',[LoginControler::class,'logout'])->name('user.logout');
});





















 



 
//  Auth::routes();
 

//  //admin routes
//  Route::post('logout', [LoginControler::class, 'logout'])->name('logout');
//  Route::get('/login',[LoginControler::class,'index']);
//  Route::post('/dologin',[LoginControler::class,'login']);
//  Route::resource('dashboard', DashboardController::class);
//  //Route::resource('login', LoginControler::class);
//  Route::resource('product', ProductControler::class);
//  Route::resource('category', CategoryController::class);
//  Route::resource('user', MainUserController::class);

//  Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
//     Route::resource('dashboard', DashboardController::class);
// });


//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
