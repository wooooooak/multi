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

Route::get('/', [
    'as' => 'root',
    'uses' => 'WelcomeController@index',
]);

Route::get('/home', [
    'as' => 'home',
    'uses' => 'WelcomeController@home',
]);


//사용자 가입
Route::get('auth/register',[
  'as' => 'users.create',
  'uses' => 'UsersController@create'
]);
Route::post('auth/register',[
  'as' => 'users.store',
  'uses'=>'UsersController@store'
]);
Route::get('auth/confirm/{code}',[
  'as' => 'users.confirm',
  'uses'=>'UsersController@confirm'
])->where('code','[\pL-\pN]{60}');


/* 사용자 인증 */
Route::get('auth/login', [
    'as' => 'sessions.create',
    'uses' => 'SessionsController@create',
]);
Route::post('auth/login', [
    'as' => 'sessions.store',
    'uses' => 'SessionsController@store',
]);
Route::get('auth/logout', [
    'as' => 'sessions.destroy',
    'uses' => 'SessionsController@destroy',
]);


/* 소셜 로그인 */
Route::get('social/{provider}', [
  'as' => 'social.login',
  'uses' => 'SocialController@execute',
]);


/* 비밀번호 초기화 */
Route::get('auth/remind', [
    'as' => 'remind.create',
    'uses' => 'PasswordsController@getRemind',
]);
Route::post('auth/remind', [
    'as' => 'remind.store',
    'uses' => 'PasswordsController@postRemind',
]);
Route::get('auth/reset/{token}', [
    'as' => 'reset.create',
    'uses' => 'PasswordsController@getReset',
])->where('token', '[\pL-\pN]{64}');
Route::post('auth/reset', [
    'as' => 'reset.store',
    'uses' => 'PasswordsController@postReset',
]);
