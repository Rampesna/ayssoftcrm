<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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

Auth::routes();

Route::post('data', function () {
    return Http::post('http://uyumsoft.netasistan.com/home/dashboard/datarefresh', []);
});

Route::middleware([])->namespace('App\\Http\\Controllers')->group(function () {
    View::composer('*', function ($view) {
        if (Auth::check()) {
            $view->with('authUser', Auth::user());
        }
    });

    Route::get('/', function () { return redirect()->route('dashboard.index'); });
    Route::get('/index', 'Dashboard@Index')->name('dashboard.index');


    Route::prefix('/tv')->group(function () {
        Route::get('/', function () { return redirect()->route('tv.index'); });
        Route::get('/index', 'TvPanel@Index')->name('tv.index');
        Route::post('/store', 'TvPanel@Store')->name('tv.store');

        Route::prefix('sections')->group(function () {
            Route::get('section/1','TvPanel@Section1')->name('tv.section.1');
            Route::get('section/2','TvPanel@Section2')->name('tv.section.2');
        });
    });
});

