<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);
});
Route::get('adminlogin',function(){
    return view('adminlogin');
});
Route::get('userlogin',function(){
    return view('userlogin');
});
Route::get('formfieldoption',function(){
    return view('formfieldoption');
});
Route::get('confirmpassword',function(){
    return view('confirmpassword');
});
Route::get('formsetting',function(){
    return view('formsetting');
});
Route::get('newform',function(){
    return view('newform');
});
Route::get('nosubmit',function(){
    return view('nosubmit');
});
Route::get('recoverypassword',function(){
    return view('recoverypassword');
});
Route::get('recoveryback',function(){
    return view('recoveryback');
});
Route::get('statisticalformsurvey',function(){
    return view('statisticalformsurvey');
});
Route::get('statisticalformtest',function(){
    return view('statisticalformtest');
});
Route::get('updateform',function(){
    return view('updateform');
});
Route::get('verifycode',function(){
    return view('verifycode');
});
Route::get('formsendtarget',function(){
    return view('formsendtarget');
});
Route::get('shortanswer',function(){
    return view('shortanswer');
});