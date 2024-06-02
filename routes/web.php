<?php

use Illuminate\Support\Facades\Route;


// $servicios=[
//     ['titulo'=>'Servicio 1'],
//     ['titulo'=>'Servicio 2'],
//     ['titulo'=>'Servicio 3'],
//     ['titulo'=>'Servicio 4'],
//     ['titulo'=>'Servicio 5'],
// ];


Route::view('/','home')->name('home');
Route::view('programas','programas')->name('programas');

// controlador 1
Route::get('talleres','App\Http\Controllers\TalleresController@talleres' )->name('talleres');

// controlador 2
// Route::get('servicios','App\Http\Controllers\Servicios2Controller@index' )->name('servicios');


Route::view('contacto','contacto')->name('contacto');
Route::view('asesoramiento','asesoramiento')->name('asesoramiento');


// route::resource('servicios','App\Http\Controllers\Servicios2Controller')->only('index','show');




//el q use
// Route::view('servicios','servicios', compact('servicios'))->name('servicios');
