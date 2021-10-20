<?php

use App\Http\Controllers\crudController;
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
    return view('welcome');
});
route::get('/index',[crudController::class,'index']);
route::get('/create_record',[crudController::class,'create']);
route::post('/insert_record',[crudController::class,'insert']);
route::get('/edit/{id}',[crudController::class,'edit']);
route::post('/update_record/{id}',[crudController::class,'update']);
route::get('/delete/{id}',[crudController::class,'delete']);