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

Route::get('/admin/pagetypes', "PageTypeController@index");

Route::get('/admin/pagetypes/create', "PageTypeController@create");
Route::post('/admin/pagetypes/create', 'PageTypeController@store');

Route::get('/admin/pagetypes/{pageType}/edit', 'PageTypeController@edit');
Route::patch('/admin/pagetypes/{pageType}', 'PageTypeController@update');
Route::delete('/admin/pagetypes/{pageType}', 'PageTypeController@destroy');


// ============================================
//
//   Page Management Area
//
// ============================================

Route::get('/pages', "PageController@index");