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

Route::view('/', 'home')->name('home.index');

Route::get('contact', 'ContactFormController@create')->name('contact.create');
Route::post('contact', 'ContactFormController@store')->name('contact.store');

Route::view('about', 'about.index')->name('about.index')->middleware('test');
Route::resource('customers', 'CustomersController')->middleware('auth');
//
//Route::get('customers', 'CustomersController@index')->name('customers.index');
//Route::get('customers/create', 'CustomersController@create')->name('customers.create');;
//Route::post('customers', 'CustomersController@store')->name('customers.store');;
//Route::get('customers/{customer}', 'CustomersController@show')->middleware('can:view,customer')->name('customers.show');;
//Route::get('customers/{customer}/edit', 'CustomersController@edit')->name('customers.edit');;
//Route::put('customers/{customer}', 'CustomersController@update')->name('customers.update');;
//Route::delete('customers/{customer}', 'CustomersController@destroy')->name('customers.destroy');;

Route::get('posts', 'PostsController@index')->name('posts.index');

Route::get('role/user/role', 'RoleUserController@syncUserRole');
Route::get('role/user/user', 'RoleUserController@syncRoleUser');

Auth::routes();
