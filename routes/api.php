<?php

use Illuminate\Http\Request;

Route::get('gamerooms', 'GameroomController@index');
Route::group(['prefix' => 'gameroom'], function () {
    Route::post('create', 'GameroomController@create');
    Route::get('edit/{id}', 'GameroomController@edit');
    Route::post('update/{id}', 'GameroomController@update');
    Route::delete('delete/{id}', 'GameroomController@delete');
});