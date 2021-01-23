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

Route::get('/produtos', function() {

    $images = [
        'coca-cola', 
        'hamburguer', 
        'pastel', 
        'suco', 
        'pizza'
    ];

    $names = [
        'Coca Cola',
        'Hamburguer',
        'Pastel',
        'Suco',
        'Pizza'
    ];

    $valores = ['3.50', '6.00', '5.00', '4.00', '23.00'];

    $quantidades = ['32', '18', '14', '24', '17'];


    return view('produtos', [
        'images' => $images,
        'names' => $names,
        'valores' => $valores,
        'quantidades' => $quantidades
    ]);
});

Route::get('/cadastrar', function() {
    return view('cadastrar');
});
