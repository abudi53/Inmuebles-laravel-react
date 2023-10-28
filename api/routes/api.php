<?php

use App\Http\Controllers\InmuebleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(InmuebleController::class)->group(function () {
    Route::get('inmuebles', 'index');
    Route::get('inmuebles/{id}', 'show');
    Route::post('inmuebles', 'store');
    Route::put('inmuebles/{id}', 'update');
    Route::delete('inmuebles/{id}', 'destroy');
});