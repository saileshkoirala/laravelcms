<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');

});

Route::auth(); 	

Route::get('/home', 'HomeController@index');



Route::get('/addcategories','Catcontroller@addcategories');

Route::get('/viewcategories','Catcontroller@viewcategories');

Route::post('/insert','Catcontroller@insert');

Route::get('delete/{id}','Catcontroller@delete');

Route::get('edit/{id}','Catcontroller@edit');

Route::get('/addproduct','Procontroller@addproduct');

Route::get('/viewproduct','Procontroller@viewproduct');

Route::post('/insertprod','Procontroller@insertprod');

Route::get('/logo','Logocontroller@changeLogo');

Route::post('/updatelogo','Logocontroller@updateLogo');

Route::get('/color','Colorcontroller@changeColor');

Route::post('/updatecolor','Colorcontroller@updateColor');

/* ********** Front end (ecommerce site)************* */

Route::get('/','Frontcontroller@front');

Route::get('/product','Frontcontroller@product');

//Route::get('/product','Frontcontroller@front');

//Route::get('/','Frontcontroller@viewlogo');






