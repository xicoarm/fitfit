<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/shop-choice', function () {
    return view('shop-choice');
});


Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/s', 'scontroller@index');

Route::get('/logout', function () {
    include '../resources/views/logout.php';
    return view('welcome');
});

Route::get('/seno', function () {
    return view('seno');
});
Route::post('/seno', function () {
    return view('seno');
});



Route::get('/5-Tage-Plan-2-Gerichte-am-Tag', function () {
    return view('nose');
});

Route::get('/5-Tage-Plan-3-Gerichte-am-Tag', function () {
    return view('5x3');
});

Route::get('/5-Tage-Plan-4-Gerichte-am-Tag', function () {
    return view('5x4');
});

Route::get('/5-Tage-Plan-5-Gerichte-am-Tag', function () {
    return view('5x5');
});

Route::get('/5-tage-pläne', function () {
    return view('5tp');
});



Route::get('/blanco', function () {
    return view('blanco');
});


Route::get('/payments', function () {
    return view('payments');
});


Route::post('/order', function () {
    return view('order');
});


Route::get('/test', function () {
    return view('test');
});

Route::get('/nose', function () {
    return view('nose');
});



//Route::post('/charge', function () {
//    return view('charge');
//});

Route::post('/test', function () {
    return view('test');
});

Route::get('/submit', 'productsController@index');

Route::post('/charge', 'nosecontroller@index');


Route::post('/submited', 'productsController@index');

Route::get('/shop/{product}', 'productsController@second');

Route::get('/shop', 'productsController@index');






















