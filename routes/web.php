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


//Front Pages
Route::get('/{url}', function($url){
    return view('front/' . $url, [ 'viewName' => Route::current()->getName() ]);
});

Route::get('/services/{category}', function( $category ){
    return view('front/services/' . $category);
});

//Resource for Pages
Route::resource('/admin/pages', 'PageController');

//Resource for Posts
Route::resource('/admin/posts', 'PostController');

//Resource for Case Studies
Route::resource('/admin/case-studies', 'CaseStudyController');

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
