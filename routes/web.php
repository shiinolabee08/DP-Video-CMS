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

Route::get('/', 'FrontController@index');

Auth::routes();

Route::get('/admin/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/admin', 'HomeController@index');


//Front Pages
Route::get('/{url}', function($url){
    return view('front/' . $url, [ 'pageName' => ucwords(str_replace('-', ' ', $url)), 'slug' => $url ]);
});

//Route for Case Studies individual pages
Route::get('/case-studies/{url}', function( $url ){
    return view('front/case-studies/' . $url, [ 'pageName' => ucwords(str_replace('-', ' ', $url)), 'slug' => $url  ]);
});

Route::get('/services/{category}', function( $category ){
    return view('front/services/' . $category);
});

//Resource for Pages
Route::resource('/admin/pages', 'PageController');

//Resource for Posts
Route::resource('/admin/posts', 'PostController');

//Resource for Form Submissions
Route::get('/admin/form-submissions', 'FormSubmissionController@index');
Route::get('/admin/form-submission/find', 'FormSubmissionController@search');
Route::get('/admin/form-submissions/{id}/reply', 'FormSubmissionController@replyToSender');
Route::post('/admin/form-submissions/send-reply', 'FormSubmissionController@submitReplyToSender');

//Resource for Contact Forms
Route::resource('/admin/contact-forms', 'ContactFormController');
Route::get('/admin/contact-form/find', [ 'uses' => 'ContactFormController@search' ]);

//Resource for Case Studies
Route::resource('/admin/case-studies', 'CaseStudyController');
Route::get('/admin/case-study/find', [ 'uses' => 'CaseStudyController@search' ]);

//Resource for Case Study Categories
Route::resource('/admin/case-study-categories', 'CaseStudyCategoryController');

//Show images/assets from storage
Route::get('storage/{category}/{filename}', function ( $category,  $filename)
{

    // $this->middleware('auth'); // restrict unauthorized user

    $path = storage_path("app/public/{$category}/{$filename}");

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});
