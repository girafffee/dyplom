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
    return redirect()->route('all-paginate.posts');
})->name('home');

Route::get('/news/single/{slug}', 'PostController@showSingle')
    ->name('single.post');

Route::get('/news/category/{category?}', 'PostController@showCategory')
    ->name('all-paginate.posts');

Route::get('/contact', 'ContactFormController@index')
    ->name('contact.index');

Route::post('/send/contact', 'ContactFormController@send')
    ->name('contact.send');

Route::get('/contact/success', function () {
    return view('pages.contact.response');
})->name('contact.response');

Route::post('/add/comment', 'CommentController@add')
    ->name('add.comment');

Route::post('/ajaxadd/comment', 'CommentController@ajaxAdd')
    ->name('ajax.add.comment');

Auth::routes();


Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin:admin']], function () {
    Voyager::routes();
});
