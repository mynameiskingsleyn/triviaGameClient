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

Route::get('', function () {
    return view('welcome');
});

//App::missing(function($exception) {
//    return View::make('index');
//});

Route::any( '{catchall}', function ( $page ) {
    //dd( $page . ' requested' );
    if($page == 'App'){
        return View::make('index');
    }else{
        return View::make('errors.404');
    }
} )->where('catchall', '(.*)');