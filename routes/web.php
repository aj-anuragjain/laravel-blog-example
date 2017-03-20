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

//home page
Route::get("/", "AllController@index");

//all posts
Route::get("/blogs", "AllController@posts");

// Route detail redirect
Route::get("/blogs/{blog_id}", "AllController@redirect");

//post detail
Route::get("/blogs/{blog_id}/{custom_url}", "AllController@detail");

//404 routes for other pages
Route::get("*", function(){
    return view("errors.404");
});

