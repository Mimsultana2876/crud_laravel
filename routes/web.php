<?php

use App\Http\Controllers\CrudController;
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

Route::get('/', function () {
    return view('insert');
    
});
Route::post('/show',[CrudController::class,'show']);
Route::post('store', [CrudController:: class,'store']);
Route::get('show', [CrudController:: class,'show']);
Route::get('delete/{id}', [CrudController:: class,'destroy']);
Route::get('edit/{id}', [CrudController:: class,'edit']);
Route::post('update/{id}', [CrudController:: class,'update']);
