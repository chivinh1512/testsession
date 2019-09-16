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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/session', 'SessionController@getsession');

Route::get('/session/alert','SessionController@getsessionalert');

Route::get('/showproduct','ShowproductController@show');

Route::get('/addproduct/{id}','ShoppingCartController@getcart');

Route::get('/delcart','ShoppingCartController@delcart');