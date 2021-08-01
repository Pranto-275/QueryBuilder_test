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


//all value
Route::get('/', 'QueryBuilderController@getAll');


//singlerow
Route::get('/rows', 'QueryBuilderController@findrows');

//findcolum
Route::get('/colum', 'QueryBuilderController@findcolum');

//multiplecolum
Route::get('/mcolum', 'QueryBuilderController@multiplefindcolum');


//specificecolum
Route::get('/scolum', 'QueryBuilderController@specificfindcolum');



//select
Route::get('/dis', 'SelectController@UniqueSelect');
//single column
Route::get('/single', 'SelectController@SingleColum');

//multiple column
Route::get('/multiple', 'SelectController@multipleColum');



//join

Route::get('/leftjoin', 'JoinController@LeftJoinData');
Route::get('/rightjoin', 'JoinController@RightJoinData');
