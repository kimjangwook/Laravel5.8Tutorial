<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('people', function () {
    $people = \App\Person::all();
    return $people;
});

Route::get('people/{person}', function (\App\Person $person) {
    return $person;
});
Route::get('people/{person}/my_number', function (\App\Person $person) {
    return $person->myNumber;
});
