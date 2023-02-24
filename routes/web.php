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

Route::get('/agenda', function () { //url
    return view('calendario'); //nome da view
});
Route::post('/atividades',[SportController::class, "store"]);


Route::get('/calendario',[SportController::class, "calendario"])->name('calendario');