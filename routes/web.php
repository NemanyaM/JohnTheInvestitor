<?php

Route::get('/', 'ShowController@index');
Route::get('marketCreate', 'ShowController@showCreateAction');
Route::post('markets', 'MarketController@store');
Route::get('markets/{id}', 'MarketController@show');
Route::get('highestMarketPrice', 'MarketController@showHighestMarket');
Route::resource('markets', 'MarketController');
