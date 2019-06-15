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

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::group(['middleware' => 'web'], function () {

    Route::get('/', function () {
        return view('home/index');
    });

    Route::prefix('Package')->group(function () {
        Route::get('/', function () {
            return view('package/index');
        });


    });

    Route::prefix('Service')->group(function () {

        Route::get('/Fusion', 'ServiceController@Fusion');
        // Route::get('/Fusion', function () {
        //     return view('service/index');
        // });

        Route::get('/Relaxation', 'ServiceController@Relaxation');
//    Route::get('/Relaxation', function () {
//        return view('service/index2');
//    });

        Route::get('/Therapeutic', 'ServiceController@Therapeutic');
//    Route::get('/Therapeutic', function () {
//        return view('service/index3');
//    });

        Route::get('/Detail/{id}', 'ServiceController@show');


    });

    Route::prefix('Contact')->group(function () {
        Route::get('/', function () {
            return view('contact/index');
        });


    });

});

Route::get('lang/{lang}', function ($lang) {
    $availLanguages = ['en', 'pt'];
    Session::put('locale', in_array($lang, $availLanguages) ? $lang : Config::get('app.locale'));
    return redirect()->back();
});




