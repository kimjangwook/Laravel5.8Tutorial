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

Route::prefix('people')->group(function () {
    Route::get('/', function () {
        $people = \App\Person::all();
        return $people;
    });

    Route::get('{person}', function (\App\Person $person) {
        return $person;
    });
    Route::get('{person}/my_number', function (\App\Person $person) {
        return $person->myNumber;
    });
    Route::get('{person}/accounts', function (\App\Person $person) {
        return $person->accounts;
    });
});
Route::prefix('groups')->group(function () {
    Route::get('/', function () {
        return \App\Person::with('groups')->get();
    });

    Route::get('sync', function () {
        $groups = \App\Group::all();
        $people = \App\Person::all();

        $groupsArr = [$groups, $groups->first(), $groups->last()];

        foreach ($people as $person) {
            $idx = rand(0, 2);
            $person->groups()->sync($groupsArr[$idx]);
        }
    });
});
