<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NamestajController;
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
Route::get("/namestaj",[NamestajController::class,"all"]);
Route::get("/namestaj/{id}",[NamestajController::class,"one"]);
Route::post("/namestaj",[NamestajController::class,"create"]);
Route::post("/namestaj/{id}",[NamestajController::class,"update"]);
