<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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



Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Auth::routes(['verify' => true]);

Route :: middleware(['auth','verified','banned'])->group( function (){
Route::get('/home',[App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route :: get ('/userv',[UserController::class,'index'])->middleware('check-permission:superadmin');
Route :: get ('/useri',[UserController::class,'create'])->middleware('check-permission:superadmin');
Route :: post ('/useri',[UserController::class,'store'])->middleware('check-permission:superadmin');
Route ::delete('users/{id}', [UserController::class, 'destroy'])->name('users.delete')->middleware('check-permission:superadmin');
Route :: get ('/user/{id}/edit',[UserController::class,'edit'])->middleware('check-permission:superadmin');
Route :: put('usere/{id}',[UserController::class,'update'])->middleware('check-permission:superadmin');

Route :: get ('/userl',[ProfileController::class,'index']);
Route :: get ('/user/{id}/profile',[ProfileController::class,'show']);
Route :: get ('/user/{id}',[ProfileController::class,'showim']);
Route :: get ('/user/{id}/editprof',[ProfileController::class,'edit']);
Route :: put ('/user/{id}/editpass',[ProfileController::class,'updatepass']);
Route :: put ('/user/{id}/editprof',[ProfileController::class,'updateprof']);
Route :: put ('/user/{id}/editpeg',[ProfileController::class,'updatepeg']);
Route :: put ('/user/{id}/editsosmed',[ProfileController::class,'updatesosmed']);
Route :: put ('/user/{id}/editaddr',[ProfileController::class,'updateaddr']);

Route :: get ('/contoh-form',[FormController::class,'conForm']);
Route :: get ('/element-form',[FormController::class,'eleForm']);

});


Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('home');
    }
    return redirect()->route('login');
});
