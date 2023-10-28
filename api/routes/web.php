<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InmuebleController;

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

Route::get('/', function () {
    return view('auth.login');
});

// Route::get('/inmuebles', function () {
//     return view('inmuebles.index');
// });

// Route::get('/inmuebles/create', [InmuebleController::class, 'create']);

Route::resource('inmuebles', InmuebleController::class)->middleware('auth');

Auth::routes(['register'=>false, 'reset'=>false]);

Route::get('/home', [InmuebleController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth'], function(){
    Route::get('/', [InmuebleController::class, 'index'])->name('home');
});
