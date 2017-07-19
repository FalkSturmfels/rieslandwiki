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

// ============================================
//
//   Main Navigation
//
// ============================================


Route::get('/', "MainController@home");
Route::get('/admin', "MainController@admin");

// ============================================
//
//   Admin Area
//
// ============================================

Route::get('/admin/pagetypes', "PageTypesController@index");

Route::get('/admin/pagetypes/create', "PageTypesController@create");
Route::post('/admin/pagetypes/create', 'PageTypesController@store');

Route::get('/admin/pagetypes/{pageType}/edit', 'PageTypesController@edit');
Route::patch('/admin/pagetypes/{pageType}', 'PageTypesController@update');
Route::delete('/admin/pagetypes/{pageType}', 'PageTypesController@destroy');
