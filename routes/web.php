<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('dashboard.index');
});

Route::get('/order', function() {
    return view('order.index');
});

Route::controller(UserController::class)->group(function() {
    Route::get('/user/list', 'index');
    Route::get('/user/view/{id}', 'show');
    Route::get('/user/edit/{id}', 'edit');
    Route::get('/user/delete/{id}', 'delete');

    Route::post('/user/store', 'store');
    Route::put('/user/update/{user}', 'update');
    Route::delete('/user/destroy/{user}', 'destroy');
});