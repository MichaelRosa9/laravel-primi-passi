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
    $data = [
        'name' => 'Frank',
        'surname' => 'Tomson',
        'films' => [
            'Harry',
            'bobby tarantino',
            'al john and jack',
        ]
    ];
    return view('home', $data);
});

Route::get('/about', function () {
    return view('about');
});
