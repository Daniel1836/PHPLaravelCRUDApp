<?php

Route::get('/welcome.php', 'CreatesController@home');
Route::get('/create.php', function(){
    return view('create');
});
Route::post('/insert.php', 'CreatesController@add');
Route::get('/update/{id}', 'CreatesController@update');
Route::post('/edit/{id}', 'CreatesController@edit');
Route::get('/read/{id}', 'CreatesController@read');
Route::get('/delete/{id}', 'CreatesController@delete');
