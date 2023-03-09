<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SurveyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->middleware('auth')->name('home');

Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('login', function () {
    return view('login');
});


Route::get('/forgot-password', function () {
    return view('forgot_password');
})->name('password.request');

Route::post('/forgot-password', [AuthController::class, 'forgotPassword'])->name('password.email');

Route::get('/reset-password/{token}', function ($token) {
    return view('reset_password', ['token' => $token]);
})->name('password.reset');

Route::post('/reset-password', [AuthController::class,'resetPassword'])->name('password.update');

Route::group([
    'prefix' => 'survey',
    'controller' => SurveyController::class
], function () {
    Route::get('create', 'index');
    Route::post('create', 'create');
    Route::post('update', 'update');
});

Route::group([
    'prefix' => 'report',
    'controller' => ReportController::class
], function () {
    Route::get('/', 'index');
    Route::post('create', 'create');
});

Route::get('newform',function(){
    return view('newform');
});

Route::get('report', function () {
    return view('form_report');
});