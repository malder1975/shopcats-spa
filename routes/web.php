<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/shopcats/{name}', function () {

    return redirect('/');

})->where ('name', '[a-zA-Z]+');

Route::resource('shopcats', 'PhonebookController');
