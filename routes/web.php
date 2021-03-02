<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'ChildrenController@home')->name('home');

Route::post('/', 'ChildrenController@SaveChildren')->name('SaveChildren');

Route::get('delete/{id}', 'ChildrenController@deleteChildren')->name('deleteChildren');

Route::put('update/{id}', 'ChildrenController@updateChildren')->name('updateChildren');