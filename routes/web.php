<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('pages.home');
});



Route::get('/register', [RegisterController::class, 'show']);

Route::get('/list_register_data', [RegisterController::class, 'showList']);

Route::get('/statistics', [RegisterController::class, 'showStats']);

Route::post('/register_form', [RegisterController::class, 'register_form_process']);
