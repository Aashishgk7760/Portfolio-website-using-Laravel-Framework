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
    return view('users.index');
});
Route::any('signup',['as'=>'users.signup', 'uses'=>'FormController@signup']);
Route::resource('forms','FormController');
Route::any('homepage',['as'=>'users.homepage', 'uses'=>'FormController@homepage']);
Route::any('aboutme',['as'=>'users.aboutme', 'uses'=>'FormController@aboutme']);
Route::any('skills',['as'=>'users.skills', 'uses'=>'FormController@skills']);
Route::any('resume',['as'=>'users.resume', 'uses'=>'FormController@resume']);
Route::any('portfolio',['as'=>'users.portfolio', 'uses'=>'FormController@portfolio']);
Route::any('reference',['as'=>'users.reference', 'uses'=>'FormController@reference']);
Route::any('hireme',['as'=>'users.hireme', 'uses'=>'FormController@hireme']);
Route::any('logout',['as'=>'users.logout', 'uses'=>'FormController@logout']);
Route::post('/homepage','FormController@logs');
Route::get('/contact',[
    'uses'=>'MailController@contact'
]);
Route::post('/contact',[
    'uses'=>'MailController@sendemail','as'=>'contact.sendemail'
]);
Route::get('/SnapResume.pdf',[
    'uses'=>'FormController@open']);