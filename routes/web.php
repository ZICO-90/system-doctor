<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\adminHomeController;

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


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

        

            Route::group(['prefix' => 'admin' , 'as' => 'admin.'],function(){

                Route::get('/',[adminHomeController::class,'adminHome'])->name('index');


            });

  




});


Route::get('/', function () {
    return view('endUser.index');
});
