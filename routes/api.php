<?php

use App\Http\Controllers\api\CategoryController;
use App\Http\Controllers\api\HomeController as ApiHomeController;
use App\Http\Controllers\api\MainuserController;
use App\Http\Controllers\api\SettingController;
use App\Http\Controllers\api\SliderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocalizationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('lang/{locale}', [LocalizationController::class,'lang']);
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('create',[HomeController::class,'add']);

Route::post('/register',[MainuserController::class,'register']);
Route::post('/login',[MainuserController::class,'login']);



  Route::apiResource('category', CategoryController::class)->middleware('Localization');
  Route::apiResource('sliders',SliderController::class);
  Route::apiResource('home',ApiHomeController::class)->middleware('Localization');
  Route::apiResource('setting',SettingController::class)->middleware('Localization');

//oute::get('category',[CategoryController::class,'index'])->middleware('Localization');;