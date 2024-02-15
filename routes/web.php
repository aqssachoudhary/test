<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
 
Route::get('home',[HomeController::class,'index']);

Route::get('test-home','HomeController@index');
Route::get('about-us','HomeController@aboutUs');

Route::get('blog-detail/{id}','HomeController@blogDetail');

Route::get('create-blog','BlogController@create');

Route::post('store-blog','BlogController@store');

Route::get('blogs','BlogController@index');

Route::get('trail','FirstController@index');

Route::post('trail','FirstController@create');

