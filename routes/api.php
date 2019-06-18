<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/case-study-categories/{type}', 'FrontController@fetchData');
Route::get('/case-studies/{category}', 'FrontController@fetchByCategory');
Route::get('/case-studies/filter-posts', 'FrontController@fetchCaseStudiesPosts');
Route::get('/contact-form/{id}', 'FrontController@getContactForm');
Route::post('/contact-us', 'FrontController@sendContactEmail');


Route::group(['middleware' => 'web'], function () {

	//Chat Messages
	Route::get('/messages', 'ChatsController@fetchMessages');
	Route::post('/messages', 'ChatsController@sendMessage');
});
