<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequestorPages;
use App\Http\Controllers\RegistrarPages;
use App\Http\Controllers\AdminPages;


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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware'=>[
    'auth:sanctum',
    'verified',
    'admin',
]],function(){

    Route::get('/admin/dashboard',[AdminPages::class,'dashboard'])->name('admin-dashboard');
    Route::get('/admin/user',[AdminPages::class,'user'])->name('admin-user');
    // Route::get('/admin/campus',[AdminPages::class,'campus'])->name('admin-campus');

});


Route::group(['middleware'=>[
    'auth:sanctum',
    'verified',
    'requestor',
]],function(){

    Route::get('/requestor/dashboard',[RequestorPages::class,'dashboard'])->name('requestor-dashboard');
    Route::get('/requestor/documents',[RequestorPages::class,'myrequest'])->name('requestor-myrequest');
    Route::get('/requestor/request/{id}',[RequestorPages::class,'requestviewstatus'])->name('requestor-requestviewstatus');

});



Route::group(['middleware'=>[
    'auth:sanctum',
    'verified',
    'registrar',
]],function(){

    Route::get('/dashboard',[RegistrarPages::class,'dashboard'])->name('registrar-dashboard');
    Route::get('/request',[RegistrarPages::class,'request'])->name('registrar-request');
    Route::get('/documents',[RegistrarPages::class,'documents'])->name('registrar-documents');

});