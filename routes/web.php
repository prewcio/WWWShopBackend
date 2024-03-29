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

//GET
Route::get('/account', 'CustomersController@list');
Route::get('/','ItemsController@items');
Route::get('/testSet',"CustomersController@setSession");
Route::get('/login',"CustomersController@loginIndex");
Route::get('/register',"CustomersController@registerIndex");
Route::get('/logout',"CustomersController@logout");
Route::get('/cart',"ItemsController@cart");
Route::get('/statute',"ItemsController@statue");
Route::get('/about',"ItemsController@about");
Route::get('/category',"ItemsController@category");
Route::get('/order',"OrdersController@index");
Route::get('/orderSent',"OrdersController@order");
Route::get('/addToCart/{id}','ItemsController@addToCart');
Route::get('/removeFromCart/{id}','ItemsController@remFromCart');

//POST
Route::post('/sendMessage','MessageController@send');
Route::post('/loginCheck','CustomersController@loginCheck', function () {
    return redirect('/account');
});
Route::post('/registerUser','CustomersController@registerUser', function () {
    return redirect('/login');
});
