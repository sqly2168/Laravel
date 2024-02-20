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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/helolaravel', function () {
    $név = 'Áron';
    return view('nézet', [
        'nev' => "<script>alert('meg vagy támadva')<\script>    "
    ]);
});

Route::get('/request', function () {
    return view('request', [
        'title' => request('title')
    ]);
});