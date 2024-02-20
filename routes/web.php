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
 Auth::routes();
 Route::get('information','ProjectController@index');


 Route::group(['middleware' => 'auth'], function () {
    
Route::get('home',[HomeController::class,'index']);
Route::get('test-home','HomeController@index');
Route::get('about-us','HomeController@aboutUs');
Route::get('blog-detail/{id}','HomeController@blogDetail');
Route::get('create-blog','BlogController@create');
Route::post('store-blog','BlogController@store');
 Route::get('blogs','BlogController@index');
Route::post('trail','FirstController@store');
Route::get('trail','FirstController@index');

Route::get('forms','FirstController@user');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('info','UserFormController@create');

/*Route::resource('customer','CustomerController');*/

Route::get('customer','CustomerController@index');
Route::post('customer','CustomerController@store');
Route::get('customer/create','CustomerController@create');
Route::get('customer/{id}/edit','CustomerController@edit');
Route::put('customer/{id}','CustomerController@update');
Route::get('customer/group','CustomerController@show');
Route::get('customer/deposit','TranscationController@new');
Route::post('customer/deposit','TranscationController@store');

Route::get('input','ListController@create');
Route::get('input','ListController@store');
Route::get('expense','ExpensesController@store');

});