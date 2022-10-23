<?php

use App\Http\Controllers\MilapController;
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
    return view('items.create');
});

Route::post('/item',[MilapController::class,'store']);

Route::get('/list',[MilapController::class,'show']);