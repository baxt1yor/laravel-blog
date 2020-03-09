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


//use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;
            //Home
            Route::get('/', 'SiteController@home')->name('home'); 
            //About us
            
            Route::get('/about', 'SiteController@about')->name('about');
            
            Route::get('/blog', 'SiteController@blog')->name('blog');
            
            //Contact
            Route::get('/contact', 'SiteController@contact')->name('contact');

            //admin 
            Route::namespace('admin')->name('admin.')->prefix('admin')->group(function () {
                Route::resource('posts', 'PostsController');
            });

