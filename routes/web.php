<?php

use Illuminate\Support\Facades\Route;

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

Route::get('user/login',[\App\Http\Controllers\BackEnd\AuthController::class,'login'])->name('user.login');
Route::post('post/user/login',[\App\Http\Controllers\BackEnd\AuthController::class,'postLogin'])->name('user.post.login');
Route::group(['middleware' => 'auth:web'],function(){
    // home page
   Route::get('/',[\App\Http\Controllers\BackEnd\HomeController::class,'home'])->name('home.page');
   // user logout
   Route::get('user/logout',[\App\Http\Controllers\BackEnd\AuthController::class,'logout'])->name('user.logout');
   // albums route
    Route::resource('albums',\App\Http\Controllers\BackEnd\AlbumController::class);
    // images route
    Route::resource('images',\App\Http\Controllers\BackEnd\ImagesController::class);
    // album create images page
    Route::get('album/{id}/create/image',[\App\Http\Controllers\BackEnd\AlbumController::class,'createImages'])->name('album.create.images');
    // save image in files
    Route::post('album/save/image',[\App\Http\Controllers\BackEnd\AlbumController::class,'saveImage'])->name('album.save.image');
    // save image in db
    Route::post('album/post/image',[\App\Http\Controllers\BackEnd\AlbumController::class,'postImages'])->name('album.store.images');
    // show images album
    Route::get('album/{id}/show/images',[\App\Http\Controllers\BackEnd\AlbumController::class,'showImages'])->name('album.show.images');
    // delete all images from album
    Route::delete('album/{id}/delete/images',[\App\Http\Controllers\BackEnd\AlbumController::class,'deleteImages'])->name('album.delete.images');
    // album move images to new any album
    Route::post('album/{id}/move/images',[\App\Http\Controllers\BackEnd\AlbumController::class,'moveImages'])->name('albums.move.images');

});
