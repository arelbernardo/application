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

Route::get('/', function () {
    return view('welcome');
});

/*----------------HOME----------------*/
Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@index']
);
/*----------------PROFILE----------------*/
Route::group([
    'prefix' => '/{profile_name}',
    'as' => 'profile.'
    ], function () {
        Route::get('/', [
            'as' => 'index',
            'uses' => 'ProfileController@index'
        ]);
        Route::get('/addExpenseModal', [
            'as' => 'addExpenseModal',
            'uses' => 'ProfileController@addExpenseModal'
        ]);
});
/*----------------APP----------------*/
Route::group([
    'prefix' => '/app',
    'as' => 'module.'
    ], function() {
        Route::get('finance', [
            'as' => 'finance',
            'uses' => 'ExpenseController@index'
        ]);
        Route::get('notes', [
            'as' => 'notes',
            'uses' => 'NoteController@index'
        ]);
});






