<?php

Route::get('/', 'AppController@index')->name('index_path');
Route::post('/', 'AppController@store')->name('store_item_path');
