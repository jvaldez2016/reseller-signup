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
    return view('welcome');
});
// user registration
Route::get('/userDetail','UserDetailController@show')->name('UserDetail');
Route::post('/userDetail','UserDetailController@store');
Route::get('/userBusinessDetail','BusinessInformationController@show');
Route::post('/userBusinessDetail','BusinessInformationController@store');

//items this route is for admin use only
Route::get('/all_item','ItemController@index');
Route::get('/add_item','ItemController@create');
Route::post('/add_item','ItemController@store');
Route::get('/add_item/b','ItemController@edit');
Route::put('/item/{id}','ItemController@update');



Auth::routes();
Route::get('/all_users','HomeController@users');

//pages
Route::get('/home', 'HomeController@index');
Route::get('/admin','HomeController@show')->name('home');
Route::get('/logout','HomeController@logout');
Route::get('/view_pdf','ItemController@pdf_view');

/** Registered user profile,edit page */
Route::get('/user/profile','ClientController@show');
Route::get('/user/profile/edit','ClientController@edit');
Route::put('/user/profile/edit/update','ClientController@update');

//clients page after registration
Route::get('user/page','ClientController@index');

/*Admin Information Page */
Route::get('/all_users','UserInfoController@index');
ROute::get('/user/{id}','UserInfoController@show');

/* get data via ajax */
Route::get('/allusers','UserInfoController@allUsersData')->name('ajaxUserData');
Route::get('/userdetail/{id}','UserInfoController@showUserDetail');
