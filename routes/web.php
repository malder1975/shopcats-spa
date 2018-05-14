<?php



Route::get('/', function () {
    return view('shopcats');
});

Route::get('/{name}', function () {

    return redirect('/');

})->where ('name', '[a-zA-Z]+');
