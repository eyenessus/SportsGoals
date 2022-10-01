<?php

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
use App\Http\Controllers\SportController;
// importando controller de sport

Route::get('/', [SportController::class, "Index"]);

Route::get('/form', function () { //url
    return view('form'); //nome da view
});
