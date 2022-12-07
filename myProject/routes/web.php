<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookTypeController;

# routes/web.php
Route::resource('book_types', BookTypeController::class);
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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::resource('book_types',BookTypeController::class);
//Route::post('book_types/update_post',[BookTypeController::class,'updatePost']);



//Route::name('book_types.')->group(function () {
//
//    Route::get('/book_types', function () {
//        // Code
//    })->name('index');
//
//    Route::get('/book_types/{id}', function () {
//        // Code
//    })->name('show');
//
//    Route::get('/book_types/create', function () {
//        // Code
//    })->name('create');
//
//    Route::post('/book_types/store', function () {
//        // Code
//    })->name('store');
//
//    Route::get('/book_types/{id}/edit', function () {
//        // Code
//    })->name('edit');
//
//    Route::put('/book_types/update', function () {
//        // Code
//    })->name('update');
//
//    Route::get('/book_types/delete/{id}', function () {
//        // Code
//    })->name('delete');
//});


//Route::group(['prefix' => 'book_types'], function () {
//    Route::get('book_types', 'BookTypeController@index');
////    Route::get('posts/create', 'PostController@create');
////    Route::post('posts/store', 'PostController@store');
////    Route::get('posts/{id}/edit', 'PostController@edit');
////    Route::patch('posts/{id}', 'PostController@update);
////    Route::patch('posts/{id}', 'PostController@destroy');
//});
