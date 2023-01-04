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

Route::get('/','FrontendController@index');
Route::get('/review-process','FrontendController@review');
Route::get('/eboard','FrontendController@eboard');
Route::get('/join-e-board','FrontendController@joineboard');




Route::get('/archive','FrontendController@archive');
Route::get('/contact','FrontendController@contact');
Route::post('/contact-now','FrontendController@contactNow');
Route::get('/indexing','FrontendController@indexing');
Route::get('/paper-submission','FrontendController@callForPaper');
Route::post('/paper-submit','FrontendController@paperSubmit');
Route::get('/fee','FrontendController@fee');
Route::get('/downloads/{vol}','FrontendController@downloads');
Route::get('/downloads/{vol}/{iss}','FrontendController@downloads_both');
Route::post('/search','FrontendController@search');
Route::get('/search/{type}/{item}','FrontendController@search_item');

// Route::get('/admin', function () {
//     return view('Admin.Dashboard.index');
// });

Route::prefix('admin')->group(function(){

    Route::resource('eboard','EboardController');
    Route::resource('news','NewsController');
	Route::resource('issue','IssueController');
    Route::resource('volume','VolumeController');
    Route::resource('contact','ContactController');
    Route::get('paper','PaperController@index');
    Route::post('paper/{id}','PaperController@destroy');
    Route::get('approved-paper','ApprovedpaperController@index');
    Route::get('approved-paper/create','ApprovedpaperController@create');
    Route::post('approved-paper','ApprovedpaperController@store');
    Route::get('profile','Adminprofile@index');
    Route::post('profile/{id}','Adminprofile@update');
    Route::post('profile/password/{id}','Adminprofile@passwordupdate');

    Auth::routes();
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
    Route::get('/','HomeController@log');

});
Route::get('/home','HomeController@home');


