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
Route::get('/ac', function () {
    return view('test');
});
Route::get('/welcome/success/acc/{id}','App\Http\Controllers\CoursesController@show');

Route::post('/getmsg','App\Http\Controllers\AjaxController@index');

Route::get('/{lang?}', function ($lang ="eng") {
	App::setlocale($lang);
    return view('welcome');
});
Route::get('welcome', function () {
    return view('welcome');
});
Route::get('/{lang?}/welcome/login', function ($lang ="eng") {
	App::setlocale($lang);
    return view('login');
});
Route::get('/{lang?}/welcome/signup', function ($lang ="eng") {
	App::setlocale($lang);
    return view('signup');
});
Route::post('/insert','App\Http\Controllers\UsersController@insert');
Route::post('/welcome/success/insert','App\Http\Controllers\CoursesController@insert')->name('file.upload');
Route::post('/store','App\Http\Controllers\AssessmentsController@insert');
Route::get('/welcome/success/dell','App\Http\Controllers\CoursesController@delete')->name('file.del');
Route::get('/welcome/success/del','App\Http\Controllers\AssessmentsController@delete')->name('del');
Route::get('/welcome/success/up','App\Http\Controllers\AssessmentsController@update')->name('upd');

/*Route::get('/insert', function(){
    return view('welcome');
});*/


Route::post('/welcome/checkLogin','App\Http\Controllers\UsersController@checkLogin');
Route::get('welcome/success', 'App\Http\Controllers\UsersController@success'
);
Route::get('welcome/logout', 'App\Http\Controllers\UsersController@logout'
);
Route::get('mail/send', 'App\Http\Controllers\MailController@send'
);
/*Route::get('/{lang?}/account', function ($lang ="eng") {
	App::setlocale($lang);
    return view('account');
});*/
