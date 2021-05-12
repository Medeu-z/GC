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
Route::get('', function () {
  return redirect('/eng');
});

Route::get('/ac', function () {
    return view('test');
});
Route::get('/welcome/success/{lang?}/acc/{id}','App\Http\Controllers\CoursesController@show');
Route::get('/welcome/success/acc/{id}','App\Http\Controllers\CoursesController@show1');

Route::post('/getmsg','App\Http\Controllers\AjaxController@index');

Route::get('/{lang?}', function ($lang ="eng") {
	App::setlocale($lang);
    return view('welcome');
});
Route::get('welcome', function () {
    return view('welcome');
});
Route::get('/{lang?}/welcome', function ($lang ="eng") {
    App::setlocale($lang);
    return view('welcome');
});
Route::get('/{lang?}/welcome/login', function ($lang ="eng") {
	App::setlocale($lang);
    return view('login');
});
Route::get('/welcome/success/{lang?}', function ($lang ="eng") {
    App::setlocale($lang);
    return view('test');
});
Route::get('/welcome/admin/{lang?}', function ($lang ="eng") {
    App::setlocale($lang);
    return view('admin');
});
Route::get('/{lang?}/welcome/signup', function ($lang ="eng") {
	App::setlocale($lang);
    return view('signup');
});
Route::post('/insert','App\Http\Controllers\UsersController@insert')->name('file.ins');
Route::post('/welcome/success/insert','App\Http\Controllers\CoursesController@insert')->name('file.upload');
Route::post('/store','App\Http\Controllers\AssessmentsController@insert');

Route::post('/welcome/success/dell','App\Http\Controllers\CoursesController@delete')->name('file.dell');
Route::post('/welcome/success/del','App\Http\Controllers\AssessmentsController@delete')->name('del');
Route::post('/welcome/success/up','App\Http\Controllers\AssessmentsController@update')->name('upd');

/*Route::get('/insert', function(){
    return view('welcome');
});*/
Route::get('welcome/delete', 'App\Http\Controllers\UsersController@delete')->name('dup');

Route::post('welcome/update', 'App\Http\Controllers\UsersController@update'
)->name('uup');



Route::get('welcome/delete/adm', 'App\Http\Controllers\AdminController@delete')->name('dupa');
Route::post('welcome/update/adm', 'App\Http\Controllers\AdminController@update')->name('uupa');

Route::post('welcome/send/msg', 'App\Http\Controllers\msgsController@insert')->name('sendm');
Route::get('welcome/del/msg', 'App\Http\Controllers\msgsController@delete')->name('senddel');


Route::post('/welcome/checkLogin','App\Http\Controllers\UsersController@checkLogin');
Route::get('welcome/success', 'App\Http\Controllers\UsersController@success'
)->name('ss');
Route::get('welcome/admin', 'App\Http\Controllers\AdminController@admin'
)->name('admin');
Route::get('welcome/logout', 'App\Http\Controllers\UsersController@logout'
)->name('sout');
Route::get('mail/send', 'App\Http\Controllers\MailController@send'
);
/*Route::get('/{lang?}/account', function ($lang ="eng") {
	App::setlocale($lang);
    return view('account');
});*/
