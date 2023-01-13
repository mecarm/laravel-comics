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

    $fumetti = config('fumetti');

    // dd($fumetti);

    return view('welcome', compact('fumetti'));
});

Route::get('/prodotto/{id}', function ($id) {

    $fumetti = config('fumetti');

    if( is_numeric($id) && $id >= 0 && $id < count($fumetti) ){
        $prodotto_singolo = $fumetti[$id]; 
    }
    else {
        abort(404);
    }
    return view('prodotto', compact('prodotto_singolo'));
})->name('prodotto.fumetto');




