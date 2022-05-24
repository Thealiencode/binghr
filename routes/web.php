<?php

use App\Http\Controllers\UsersController;
use App\Models\Role;
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
    return view('index');
});


Route::controller(UsersController::class)->group(function () {
    Route::get('/', 'index');
    Route::post('/create', 'store');
    Route::post('/update', 'update');
    Route::get('/users', 'get_users');
    Route::get('/users/{id}', 'show');
    Route::delete('/{id}', 'destroy');
});
