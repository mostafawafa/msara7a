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


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');


//user
Route::get('/users/{id}','UserController@showUserProfile');
Route::get('/users/{user}/{type}','UserController@showPublished')->middleware('user');
Route::get('/logout','UserController@logout');



//setting
Route::get('/setting','UserController@showSetting');
Route::post('/setting','UserController@saveSetting');



Route::get('tests',function(){

//   dd(Storage::disk('public')->lastModified('file.txt'));
//    dd(Storage::url('avatars/c03Uh4igYGHwFu3ZCozkDx0MyGab3Bob2eu4S8pB.png'));

    dd(Auth::user()->id);

});


Route::get('home/messages','MessageController@showMessages');
Route::get('home/questions','MessageController@showQuestions');
Route::post('publish/{message}','MessageController@publish');
Route::post('messages/{user}','MessageController@store');







Route::get('/admin','AdminController@index');
Route::get('/admin/edit/{user}','AdminController@edit');
Route::post('/admin/edit/{user}','AdminController@submitEdit');

Route::get('/user/{user}/delete','UserController@delete');

Route::get('admin/search','AdminController@search');
