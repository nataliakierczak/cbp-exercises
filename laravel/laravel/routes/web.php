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

Route::get('', 'HomepageController')->name('home');


Route::get('welcome', function () {
    return view('welcome');
});

//argument is not required-therefore there is question matk and argument of function has null assigned
    Route::get('contact/{who?}', function ($who=null) {
    $contact_view=view('contact');
        $contact_view->who=$who;
        $contact_view->recipients = ['Stuart', 'Kevin', 'Ann'];
    return $contact_view;
});

Route::get('post/{id?}', 'BlogPostController@post_detail')
   ->name('post_detail')
    ->where('id', '[0-9]+');

//
Route::get('list', 'BlogPostController@post_list')
->name('post_list');

                        //request handled by add method of BlogPostCntroller
Route::get('post/add', 'BlogPostController@add')->name('add_post');

Route::post('post/add', 'BlogPostController@handleAdd');


/*
Route::get('contact/detail', function () {
    return 'Contact form detail <a href="'.route('contact someone' , ['whom' =>'Natalia']). '">Contact Natalia</a>';
});

Route::get('contact/{whom}', function ($whom) {
    return 'Contact form addressing ' .$whom;
})->where('whom', '[a-zA-Z]+')->name('contact someone');

Route::get('ajax_call', function () {
    return array(
        'name'=>'Natalia',

    );
});

Route::get('product/{id}', function ($product_id) {
    return 'This is a product ' .$product_id;
})->where('id', '[0-9]+');

Route::get('games', function () {
    return 'This is the list of games';
});

Route::get('game/{id}', function ($id) {
    return 'This is the details of the game ' .$id;
});
*/