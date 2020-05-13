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

use App\Http\Controllers\admin\FeddbacksController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
            //Home
            Route::get('/', 'SiteController@home')->name('home'); 
            //About us
            
            Route::get('/about', 'SiteController@about')->name('about');
            
            Route::get('/blog', 'SiteController@blog')->name('blog');
            
            //Contact
            Route::get('/contact', 'SiteController@contact')->name('contact');
            Route::post('/contect', 'SiteController@feedbackStore')->name('contact.store');
            //batafsil
            Route::get('/blog/{id}', 'SiteController@blogmore')->name('blog.more');
            
            //Searchp
            Route::get('/search', 'SiteController@search')->name('search');
            
            //admin 
            Route::namespace('admin')->middleware('auth')->name('admin.')->prefix('admin')->group(function () {
                Route::get('/', function (){
                    return redirect()->route('admin.posts.index');
                });
                Route::get('feedback', 'FeddbacksController@index')->name('feedback.index');
                Route::get('feedback/{id}/show', 'FeddbacksController@show')->name('feedback.show');

                Route::delete('feedback/{id}/delete', 'FeddbacksController@destroy')->name('feedback.delete');
                //Profile
                Route::get('/profile', 'ProfileController@index')->name('profile.index');
                Route::put('/profile/update', 'ProfileController@update')->name('profile.update');
                Route::put('/profile/password', 'ProfileController@password')->name('profile.password');
                //cooks
                Route::resource('cooks', 'CooksController');
               
                //Posts
                Route::resource('posts', 'PostsController');
            });

            Auth::routes();

            // Route::get('/home', 'HomeController@index')->name('home');
