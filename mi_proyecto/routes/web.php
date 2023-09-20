<?php


use Illuminate\Support\Facades\Route;

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

Route::resource('products', ProductController::class);
Route::resource('people', PersonController::class);

Route::get('/people/{person}/add-product', 'PersonController@showAddProductForm')->name('people.show-add-product-form');
Route::post('/people/{person}/add-product', 'PersonController@addProduct')->name('people.addProduct');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
