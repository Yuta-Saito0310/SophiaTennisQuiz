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
    return view('quiz.index');
});
Route::get('/categories', function () {
    return view('quiz.category');
});
Route::get('/categories/{id?}/', 'QuizController@quizPageShow');

Route::get('/crud/index2021', 'CrudController@index');
Route::get('/crud/index2021/create', 'CrudController@create');
Route::post('/crud/index2021/store', 'CrudController@store');
Route::get('/crud/index2021/edit/{id?}', 'CrudController@edit');
Route::put('/crud/index2021/update/{id?}', 'CrudController@update');

Route::get('/crud/index2021/category', 'CrudController@categoryIndex');
Route::get('/crud/index2021/category/create', 'CrudController@categoryCreate');
Route::post('/crud/index2021/category/store', 'CrudController@categoryStore');
Route::get('/crud/index2021/category/edit/{id?}', 'CrudController@categoryEdit');
Route::put('/crud/index2021/category/update/{id?}', 'CrudController@categoryUpdate');