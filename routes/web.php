<?php

use Illuminate\Support\Facades\Route;
use App\Events\NotifyProcessed;
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

Route::get('/form', function () {
    return view('form');
});
Route::get('/show-notify', function () {

    event(new NotifyProcessed(request()->all()));
    return view('welcome');
});
