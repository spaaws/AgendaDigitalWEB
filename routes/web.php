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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route :: resource ('/contatos', 'ContatoController');
Route :: resource ('/perfil', 'PerfilController');

Route::get('/login/facebook', 'SocialAuthController@loginFacebook');
Route::get('/callback/facebook', 'SocialAuthController@callbackFacebook');
Route::get('/logout/facebook', 'SocialAuthController@logoutFacebook');

Route::get('/login/google', 'SocialAuthController@loginGoogle');
Route::get('/callback/google', 'SocialAuthController@callbackGoogle');
Route::get('/logout/google', 'SocialAuthController@logoutGoogle');

Route::get('/generate-docx', 'PerfilController@generateDocx');
