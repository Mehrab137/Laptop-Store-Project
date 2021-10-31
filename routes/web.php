<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'laptop', 'namespace' => 'App\Http\Controllers'], function() {

    Route::get('add', 'LaptopController@addLaptopView')->name('add.laptop.view');
    Route::post('submit', 'LaptopController@addLaptopSubmit')->name('add.laptop.submit');
    Route::get('view-list', 'LaptopController@viewLaptopList')->name('view.laptop.list');
    Route::get('pdf', 'LaptopController@createPdf')->name('create.pdf.laptop');
});
Route::get('/' , function()
{
 return view('home');
});