<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', 'PagesController@index');
Route::get('/consulting', 'PagesController@consulting');
Route::get('/training', 'PagesController@training');
Route::get('/contact', 'PagesController@contact');
// Route::get('/other/{id}/{slug?}', 'PagesController@other')
// 	->where('id', '[0-9]+')
// 	->where('slug', '[a-z-]+');
Route::post('/contact', 'PagesController@store');

Route::get('/gallery', 'PagesController@gallery');





// Route::get('{page}', function($page) {
// 	dd($page);
// })->where('page', '.*');

//echo('aaaaaaaaaaaaaaaa');
//foreach ( Route::getroutes() as $route ) {
//    echo '<pre>';
//    print_r( dd($route->getpath() ) );
//    echo('bbbbbbbbbbbbbbbbbbbbbbbbb');
//    echo '</pre>';
//}
