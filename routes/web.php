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

Route::get('/', function () {  // commented for the chat system to work
    return view('welcome');
});  

Route::get('/try', function () {
    return view('try');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



//routes for social login
Route::get('{provider}/auth', [
      'uses' =>'SocialsController@auth',
      'as'=>'social.auth']);

Route::get('{provider}/redirect', [
      'uses' =>'SocialsController@auth_callback',
      'as'=>'social.callback']);

//routes for my chat app

Route::get('/chat', 'ChatsController@index')->name('chat');
Route::get('messages', 'ChatsController@fetchMessages');
Route::post('messages', 'ChatsController@sendMessage');

