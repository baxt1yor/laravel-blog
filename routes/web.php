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

// use App\Http\Controllers\SiteController;


    Route::get('/', 'SiteController@home')->name('home');
    
    //Catalog

    
    // //News
    // Route::get('/news', function(){
        //     return "News";
        // })->name('news');
        
        // Route::get('/news/{date}/{slug}', function($date, $slug){
            //     echo $date;
            //     echo "<br>";
            //     echo $slug;
            // })->name('news');
            
            //About us
            
            Route::get('/about', 'SiteController@about')->name('about');
            
            Route::get('/blog', 'SiteController@blog')->name('blog');
            
            //Contact
            Route::get('/contact', 'SiteController@contact')->name('contact');
            

